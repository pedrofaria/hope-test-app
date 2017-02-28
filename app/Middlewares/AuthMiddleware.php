<?php
namespace App\Middlewares;

use Hope\Contracts\MiddlewareInterface;
use Hope\Exceptions\UnauthorizedException;
use \Closure;

class AuthMiddleware implements MiddlewareInterface
{
    public function handle($request, Closure $next)
    {
        $token = trim($request->getData('token'));

        if ($token != '123456') {
            throw new UnauthorizedException;
        }

        return $next($request);
    }
}