<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Hope\Application(realpath(__DIR__.'/../'));
$app->bootstrap();
$app->run();

return $app;