<?php

$RunningMonitorFunction = 'reportMalfunction';

$errors = include dirname(__DIR__) . '/inc/RunMonitorFunction.php';

echo count($errors) > 0 ? implode("<br>", $errors) : "ok";