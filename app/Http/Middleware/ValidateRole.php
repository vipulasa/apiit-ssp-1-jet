<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role_id): Response
    {

        // check if the role ID exists
        $role = \App\Models\Role::findOrFail($role_id);

        // check if the user role is the same as the role ID
        if ($request->user()->role_id !== $role->id) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
