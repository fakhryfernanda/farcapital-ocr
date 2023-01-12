<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logout()
    {
        session()->flush();
        session()->invalidate();
        return redirect('/login');
    }
    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $payload = [
            'email' => $email,
            'password' => $password,
        ];
        
        $auth = HttpClient::fetch(
            "POST",
            "http://localhost:8000/api/login",
            $payload,
        );

        // dd($auth);

        // jika login gagal
        if ($auth['status'] == false) {
            return back()->with('loginError', $auth['message']);
        }

        if (!session()->isStarted()) {
            session()->start();
        }

        $token = $auth['data']['auth']['token'];
        $token_type = $auth['data']['auth']['token_type'];
        session()->put("token", "$token_type $token");

        session()->put("role", $auth['data']['user']['id_role']);
        session()->put("id_user", $auth['data']['user']['id']);

        if (session('role') == 1) {
            return redirect('/dashboard');
        } elseif (session('role') == 2) {
            return redirect('/profile');
        }
        
    }
}
