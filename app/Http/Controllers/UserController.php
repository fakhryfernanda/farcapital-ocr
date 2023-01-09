<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {

        $request->validate(
            [
                'email' => 'required|min:8',
                'password' => 'min:8|required_with:password_verification|same:password_verification',
                'password_verification' => 'required|min:8'
            ],
            [
                'required' => ":attribute tidak boleh kosong",
                // 'unique' => ":attribute telah digunakan",
                'min' => ":attribute minimal 8 karakter"

            ]
        );


        $payload = [
            "email" => $request->input('email'),
            "password" => $request->input('password'),
        ];

        // dd($payload);

        $responseUsers = HttpClient::fetch(
            "POST",
            "http://localhost:8000/api/user/add",
            $payload
        );
        // dd($responseUsers, $payload);

        if ($responseUsers['status'] == false) {
            return redirect()->back()->with('error' . $responseUsers['data'], $responseUsers['message']);
        }
        return redirect()->back()->with('success', $responseUsers['message']);
    }
}
