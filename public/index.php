<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

$appStorage = '/tmp/storage';
if (!file_exists($appStorage)) {
    mkdir($appStorage, 0777, true);
    mkdir($appStorage.'/framework/views', 0777, true);
    mkdir($appStorage.'/framework/cache', 0777, true);
    mkdir($appStorage.'/framework/cache/data', 0777, true);
    mkdir($appStorage.'/framework/sessions', 0777, true);
    mkdir($appStorage.'/logs', 0777, true);
}
$_SERVER['APP_STORAGE'] = $appStorage;

$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());