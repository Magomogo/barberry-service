<?php
namespace Barberry;

include dirname(__DIR__) . '/vendor/autoload.php';

$application = new Application(new Config(realpath(__DIR__ . '/../'), '/etc/config.php'));
$application->run()->send();