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
use Symfony\Component\Process\Process;
use Symfony\Component\Process\PhpExecutableFinder;
use Composer\Script\CommandEvent;
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
    public static function buildBootstrap(CommandEvent $event)
    {
        $options = static::getOptions($event);
        foreach ($options['dm-apps'] as $config) {
            $appDir = $config['app-dir'];

            if (!is_dir($appDir)) {
                echo 'The symfony-app-dir ('.$appDir.') specified in composer.json was not found in '.getcwd().', can not build bootstrap file.'.PHP_EOL;
                return;
            }
            $appDir = 'app';

            static::executeBuildBootstrap($appDir, $options['process-timeout']);
        }
    }

    /**
     * Clears the Symfony cache.
     *
     * @param $event CommandEvent A instance
     */
    public static function clearCache(CommandEvent $event)
    {
        $options = static::getOptions($event);
        foreach ($options['dm-apps'] as $config) {

            $appDir = $config['app-dir'];

            if (!is_dir($appDir)) {
                echo 'The symfony-app-dir ('.$appDir.') specified in composer.json was not found in '.getcwd().', can not clear the cache.'.PHP_EOL;
                return;
            }
            static::executeCommand($event, $appDir, 'cache:clear --no-warmup', $options['process-timeout']);
        }
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
    public static function installAssets(CommandEvent $event)
    {
        $options = static::getOptions($event);
        foreach ($options['dm-apps'] as $config) {
            $appDir = $config['app-dir'];
            $webDir = $config['web-dir'];
            $symlink = '';
            if ($options['dm-assets-install'] == 'symlink') {
                $symlink = '--symlink ';
            } elseif ($options['dm-assets-install'] == 'relative') {
                $symlink = '--symlink --relative ';
            }

            if (!is_dir($webDir)) {
                echo 'The symfony-web-dir ('.$webDir.') specified in composer.json was not found in '.getcwd().', can not install assets.'.PHP_EOL;

                return;
            }

            static::executeCommand($event, $appDir, 'assets:install '.$symlink.escapeshellarg($webDir));

        }

    }

    /**
     * Updated the requirements file.
     *
     * @param $event CommandEvent A instance
     */
    public static function installRequirementsFile(CommandEvent $event)
    {
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

    protected static function getOptions(CommandEvent $event)
    {
        $options = array_merge(static::$options, $event->getComposer()->getPackage()->getExtra());
        $options['process-timeout'] = $event->getComposer()->getConfig()->get('process-timeout');

        return $options;
    }
}
