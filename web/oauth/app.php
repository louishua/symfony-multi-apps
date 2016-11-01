<?php

use Symfony\Component\HttpFoundation\Request;

$loader = require_once __DIR__.'/../../apps/bootstrap.php.cache';

require_once __DIR__.'/../../apps/oauth/OauthKernel.php';

$kernel = new PonyKernel('prod', false);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
