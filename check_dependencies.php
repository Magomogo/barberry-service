#!/usr/bin/php
<?php
error_reporting(E_ALL | E_STRICT);

$RunningMonitorFunction = 'reportUnmetDependencies';

$errors = include __DIR__ . '/inc/RunMonitorFunction.php';

echo count($errors) > 0 ? implode("\n", $errors) : "\nAll dependencies are passed successfully\n\n";