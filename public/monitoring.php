<?php

$RunningMonitorFunction = 'reportMalfunction';

$errors = include dirname(__DIR__) . '/inc/RunMonitorFunction.php';

if (!is_writeable(__DIR__ . '/cache')) {
    $errors[] = 'Cannot write to ./public/cache directory';
}

if (!is_writeable(dirname(__DIR__) . '/usr/storage')) {
    $errors[] = 'Cannot write to ./usr/storage directory';
}

echo count($errors) > 0 ? implode("<br>", $errors) : "ok";