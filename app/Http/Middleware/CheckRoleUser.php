<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::check()) {
            return abort(403, 'No puedes visualizar la página sin estar logueado.');
        }

        $user = Auth::user();
        if ($user->role == 'user') {
            return abort(403, 'No puedes visualizar la página sin permisos de administrador.');
        }

        return $next($request);
    }
}