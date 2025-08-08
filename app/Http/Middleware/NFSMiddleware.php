<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NFSMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = 'admin';
        $password = '123';

        if ($user !== 'admin' || $password !== '123') {
            return redirect()->route('index');
        }

        echo '<h1>Passou pelo Middleware NFS<h1>';
        return $next($request);
    }
}
