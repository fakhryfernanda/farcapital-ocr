<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\HttpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IsUser
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
        if(Session::has("token")) {
            $auth = HttpClient::fetch(
                "GET",
                "http://localhost:8000/api/me"
            );
            if(!$auth) {
                return redirect("/login");
            }

            if (session('role') != 2) {
                return redirect('/accessdenied');
            }
        } else {
            return redirect("/login");
        }
        return $next($request);
    }
}
