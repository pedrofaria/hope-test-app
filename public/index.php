<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Hope\Application();

$app->addExternalProviders([
    // App\Providers\YourProviderClassProvider::class,
]);

$app->setRouteFile(__DIR__ . '/../config/routes.php');

$app->bootstrap();
$app->run();

return $app;