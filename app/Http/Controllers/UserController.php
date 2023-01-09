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

        if ($responseUsers['status'] == false) {
            return back()->with('error', $responseUsers['message']);
        }
        return redirect('/login')->with('success', $responseUsers['message']);
    }


    // public function index()
    // {
    //     $responseData = HttpClient::fetch(
    //         "GET",
    //         "http://localhost:8000/api/user"
    //     );
    //     $data = $responseData["data"];

    //     return view(
    //         'profile',
    //         ['data' => $data]
    //     );
    // }
}
