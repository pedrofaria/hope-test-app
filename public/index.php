<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Hope\Application();

// $app->addExternalProviders([
//     // App\Providers\YourProviderClassProvider::class,
// ]);

$app->setRoute(__DIR__ . '/../app/routes.php');

// $app->setRoute(function(Hope\Route $route) {
//     $route->add('GET', '/test', function() { return ['teste' => true]; });
// });

$app->bootstrap();

$app->run();
