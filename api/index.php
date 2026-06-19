<?php

$storagePath = '/tmp/storage';
foreach (['framework/cache/data', 'framework/sessions', 'framework/views', 'logs'] as $dir) {
    if (!is_dir("$storagePath/$dir")) mkdir("$storagePath/$dir", 0777, true);
}
$env = [
    'APP_STORAGE' => $storagePath,
    'VIEW_COMPILED_PATH' => "$storagePath/framework/views",
    'SESSION_DRIVER' => 'cookie',
    'CACHE_STORE' => 'array',
    'LOG_CHANNEL' => 'stderr',
    'DB_CONNECTION' => 'sqlite',
    'DB_DATABASE' => ':memory:',
];

foreach ($env as $key => $value) {
    $_SERVER[$key] = $value;
}

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->handleRequest(Illuminate\Http\Request::capture());