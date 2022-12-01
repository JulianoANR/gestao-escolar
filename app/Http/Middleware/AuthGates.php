<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $cargos = Cargo::with('permissions')->get();
            $permissionsArray = [];

            foreach ($cargos as $cargo) {
                foreach ($cargo->permissions as $permissions) {
                    $permissionsArray[$permissions->title] [] = $cargo->id;
                }
            }

            foreach ($permissionsArray as $title => $cargos) {
                Gate::define($title, function ($user) use ($cargos) {
                    return count(array_intersect($user->cargos->pluck('id')->toArray(), $cargos)) > 0;
                });
            }
        }


        return $next($request);
    }
}
