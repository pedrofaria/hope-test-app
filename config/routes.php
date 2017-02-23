<?php
/**
 * Map all your routes to your actions.
 * 
 *    $route->add(METHOD, URI, ACTION);
 * 
 * If you want to map more than one method to the same action, use:
 * 
 *    $route->add([METHOD1, METHOD2], URI, ACTION);
 * 
 * You can define parameters on URI using claves. Example:
 * 
 *    /recipes/{id}
 * 
 * Now the parameter id will be passed to your controller action. You can also
 * specify an regular expression to your parameter to have a better controls of
 * your URIs, example:
 * 
 *     /recipes/{id:\d+}
 * 
 * Your actions should be defined as string or array. example:
 * 
 *     'App\Controller\RecipesController::index'
 *     ['App\Controller\RecipesController', 'index']
 * 
 * For more informations, access https://github.com/nikic/FastRoute
 */

$route->add('GET', '/', function() {
    return ['status' => true];
});

$route->add('GET', '/ping', 'App\Controllers\HomeController::ping');
