<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Hope\Application();

// $app->addExternalProviders([
//     // App\Providers\YourProviderClassProvider::class,
// ]);

$app->setRoute(__DIR__ . '/../app/routes.php');

// $app->setRoute(function(Hope\Router\RouteColletor $route) {
//     $route->get('/test', function() { return ['teste' => true]; });
// });

$app->bootstrap();

$app->run();
