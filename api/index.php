<?php

$storagePath = '/tmp/storage';
$directories = [
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/views',
    $storagePath . '/logs'
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

$envVars = [
    'APP_STORAGE' => $storagePath,
    'VIEW_COMPILED_PATH' => $storagePath . '/framework/views',
    'SESSION_DRIVER' => 'cookie',
    'CACHE_STORE' => 'array',
    'LOG_CHANNEL' => 'stderr',
    'DB_CONNECTION' => 'sqlite',
    'DB_DATABASE' => ':memory:',
];

foreach ($envVars as $key => $value) {
    putenv("{$key}={$value}");
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}

require __DIR__ . '/../public/index.php';