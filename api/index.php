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


$_ENV['APP_STORAGE'] = $storagePath;
$_ENV['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';
$_ENV['SESSION_DRIVER'] = 'cookie';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['LOG_CHANNEL'] = 'stderr';
$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = ':memory:'; 
require __DIR__ . '/../public/index.php';