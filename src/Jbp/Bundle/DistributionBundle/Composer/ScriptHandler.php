<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) zhanghua <zhanghua8760@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jbp\Bundle\DistributionBundle\Composer;

use Symfony\Component\ClassLoader\ClassCollectionLoader;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\PhpExecutableFinder;
use Composer\Script\Event;
use Sensio\Bundle\DistributionBundle\Composer\ScriptHandler as base;

/**
 * @author zhanghua <zhanghua8760@gmail.com>
 */
class ScriptHandler extends Base
{
    /**
     * Composer variables are declared static so that an event could update
     * a composer.json and set new options, making them immediately available
     * to forthcoming listeners.
     */
    protected static $options = array(
        'dm-apps'           => array(),
        'dm-assets-install' => 'hard',
        'dm-cache-warmup'   => false,
    );

    /**
     * Builds the bootstrap file.
     *
     * The bootstrap file contains PHP file that are always needed by the application.
     * It speeds up the application bootstrapping.
     *
     * @param $event CommandEvent A instance
     */
    public static function buildBootstrap(Event $event)
    {
        $options = static::getOptions($event);
        foreach ($options['dm-apps'] as $config) {
            $bootstrapDir = $autoloadDir = $config['app-dir'];

            if (static::useNewDirectoryStructure($options)) {
                $bootstrapDir = $options['symfony-var-dir'];
                if (!static::hasDirectory($event, 'symfony-var-dir', $bootstrapDir, 'build bootstrap file')) {
                    break;
                }
            }
            if (!static::hasDirectory($event, 'symfony-app-dir', $autoloadDir, 'build bootstrap file')) {
                break;
            }

            static::executeBuildBootstrap($event, $bootstrapDir, $autoloadDir, $options['process-timeout']);
        }
    }

    /**
     * Clears the Symfony cache.
     *
     * @param $event CommandEvent A instance
     */
    public static function clearCache(Event $event)
    {
        $options = static::getOptions($event);
        foreach ($options['dm-apps'] as $config) {
            $consoleDir = $config['app-dir'];
            if (!static::hasDirectory($event, 'symfony-app-dir', $consoleDir, 'execute command')) {
                break;
            }
            if (null === $consoleDir) {
                break;
            }
            $warmup = '';
            if (empty($options['symfony-cache-warmup'])) {
                $warmup = ' --no-warmup';
            }
            $warmup = ' --no-warmup';

            static::executeCommand($event, $consoleDir, 'cache:clear' . $warmup, $options['process-timeout']);
        }

    }

    /**
     * Returns a relative path to the directory that contains the `console` command.
     *
     * @param Event  $event      The command event
     * @param string $actionName The name of the action
     *
     * @return string|null The path to the console directory, null if not found.
     */
    protected static function getConsoleDir(Event $event, $actionName)
    {
        $options = static::getOptions($event);

        if (static::useNewDirectoryStructure($options)) {
            if (!static::hasDirectory($event, 'symfony-bin-dir', $options['symfony-bin-dir'], $actionName)) {
                return;
            }

            return $options['symfony-bin-dir'];
        }

        if (!static::hasDirectory($event, 'symfony-app-dir', $options['symfony-app-dir'], 'execute command')) {
            return;
        }

        return $options['symfony-app-dir'];
    }

    /**
     * Installs the assets under the web root directory.
     *
     * For better interoperability, assets are copied instead of symlinked by default.
     *
     * Even if symlinks work on Windows, this is only true on Windows Vista and later,
     * but then, only when running the console with admin rights or when disabling the
     * strict user permission checks (which can be done on Windows 7 but not on Windows
     * Vista).
     *
     * @param $event CommandEvent A instance
     */
    public static function installAssets(Event $event)
    {
        $options = static::getOptions($event);
        foreach ($options['dm-apps'] as $config) {
            $consoleDir = $config['app-dir'];

            if (null === $consoleDir) {
                break;
            }

            $webDir = $config['web-dir'];

            $symlink = '';
            if ('symlink' == $options['symfony-assets-install']) {
                $symlink = '--symlink ';
            } elseif ('relative' == $options['symfony-assets-install']) {
                $symlink = '--symlink --relative ';
            }

            if (!static::hasDirectory($event, 'symfony-web-dir', $webDir, 'install assets')) {
                break;
            }

            static::executeCommand($event, $consoleDir, 'assets:install ' . $symlink . escapeshellarg($webDir), $options['process-timeout']);
        }

    }

    /**
     * Updated the requirements file.
     *
     * @param $event CommandEvent A instance
     */
    public static function installRequirementsFile(Event $event)
    {
        $options = static::getOptions($event);
        $sensioDistributionBundleDir =  dirname((new \ReflectionClass(get_parent_class(__CLASS__)))->getFileName());
        foreach ($options['dm-apps'] as $config) {
            $appDir = $config['app-dir'];
            $fs = new Filesystem();

            $newDirectoryStructure = static::useNewDirectoryStructure($options);

            if (!$newDirectoryStructure) {
                if (!static::hasDirectory($event, 'symfony-app-dir', $appDir, 'install the requirements files')) {
                    break;
                }
                $fs->copy($sensioDistributionBundleDir . '/../Resources/skeleton/app/SymfonyRequirements.php', $appDir . '/SymfonyRequirements.php', true);
                $fs->copy($sensioDistributionBundleDir . '/../Resources/skeleton/app/check.php', $appDir . '/check.php', true);
            } else {
                $binDir = $options['symfony-bin-dir'];
                $varDir = $options['symfony-var-dir'];
                if (!static::hasDirectory($event, 'symfony-var-dir', $varDir, 'install the requirements files')) {
                    break;
                }
                if (!static::hasDirectory($event, 'symfony-bin-dir', $binDir, 'install the requirements files')) {
                    break;
                }
                $fs->copy($sensioDistributionBundleDir . '/../Resources/skeleton/app/SymfonyRequirements.php', $varDir . '/SymfonyRequirements.php', true);
                $fs->copy($sensioDistributionBundleDir . '/../Resources/skeleton/app/check.php', $binDir . '/symfony_requirements', true);
                $fs->remove(array($appDir . '/check.php', $appDir . '/SymfonyRequirements.php', true));

                $fs->dumpFile($binDir . '/symfony_requirements', '#!/usr/bin/env php' . "\n" . str_replace(".'/SymfonyRequirements.php'", ".'/" . $fs->makePathRelative($varDir, $binDir) . "SymfonyRequirements.php'", file_get_contents($binDir . '/symfony_requirements')));
                $fs->chmod($binDir . '/symfony_requirements', 0755);
            }

            $webDir = $config['web-dir'];

            // if the user has already removed the config.php file, do nothing
            // as the file must be removed for production use
            if ($fs->exists($webDir . '/config.php')) {
                $requiredDir = $newDirectoryStructure ? $varDir : $appDir;

                $fs->dumpFile($webDir . '/config.php', str_replace('/../app/SymfonyRequirements.php', '/' . $fs->makePathRelative($requiredDir, $webDir) . 'SymfonyRequirements.php', file_get_contents($sensioDistributionBundleDir . '/../Resources/skeleton/web/config.php')));
            }
        }




        exit;
        $options = self::getOptions($event);

        foreach ($options['dm-apps'] as $config) {
            $appDir = $config['app-dir'];

            if (!is_dir($appDir)) {
                echo 'The symfony-app-dir ('.$appDir.') specified in composer.json was not found in '.getcwd().', can not install the requirements file.'.PHP_EOL;

                return;
            }
           $sensioDistributionBundleDir =  dirname((new \ReflectionClass(get_parent_class(__CLASS__)))->getFileName());

            copy($sensioDistributionBundleDir.'/../Resources/skeleton/app/SymfonyRequirements.php', $appDir.'/SymfonyRequirements.php');
            copy($sensioDistributionBundleDir.'/../Resources/skeleton/app/check.php', $appDir.'/check.php');

            $webDir = $config['web-dir'];

            // if the user has already removed the config.php file, do nothing
            // as the file must be removed for production use
            if (is_file($webDir.'/config.php')) {
                copy($sensioDistributionBundleDir.'/../Resources/skeleton/web/config.php', $webDir.'/config.php');
            }

        }


    }

    protected static function getOptions(Event $event)
    {
        $options = array_merge(static::$options, $event->getComposer()->getPackage()->getExtra());
        $options['process-timeout'] = $event->getComposer()->getConfig()->get('process-timeout');

        return $options;
    }
}
