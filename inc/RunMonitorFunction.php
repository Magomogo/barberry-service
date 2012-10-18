<?php

include dirname(__DIR__) . '/vendor/autoload.php';

$config = new Barberry\Config(realpath(__DIR__ . '/../'), '/etc/config.php');
$errors = array();
foreach (glob($config->directoryMonitors . '*.php') as $filename) {
    $pluginClassName = 'Barberry\\Monitor\\' . basename($filename, ".php") . 'Monitor';
    $monitor = new $pluginClassName();
    $errors = array_merge($errors, $monitor->$RunningMonitorFunction());
}

return $errors;
