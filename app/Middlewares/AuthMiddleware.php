<?php
namespace App\Middlewares;

use Hope\Contracts\MiddlewareInterface;
use \Closure;

class AuthMiddleware implements MiddlewareInterface
{
    public function handle($request, Closure $next)
    {
        var_dump('Aeeeew');
        return $next($request);
    }
}