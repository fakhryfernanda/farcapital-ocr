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

        if ($auth['status'] == false) {
            return redirect()->back()->with('error'.$auth['data'], $auth['message']);
        }

        if (!session()->isStarted()) {
            session()->start();
        }

        $token = $auth['data']['auth']['token'];
        $token_type = $auth['data']['auth']['token_type'];
        session()->put("token", "$token_type $token");

        session()->put("role", $auth['data']['user']['id_role']);
        session()->put("id_user", $auth['data']['user']['id']);
        // dd($payload,$auth,session('id_user'));

        return redirect('/profile');
        
    }
}
