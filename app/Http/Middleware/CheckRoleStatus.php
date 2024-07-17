<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\OpsiLogin;

class CheckRoleStatus
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $roleStatus = OpsiLogin::where('peran', $user->role)->first();

            if ($roleStatus && $roleStatus->aktif === 'N') {
                Auth::logout();
                return back()->with('error', 'Peran Anda sedang dinonaktifkan. Silakan hubungi administrator.');
            }
        }

        return $next($request);
    }
}
