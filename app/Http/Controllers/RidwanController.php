<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\HttpClient; //import file dari http client

class RidwanController extends Controller
{
    public function logout(){ 
        session ()->flush(); //fungsi untuk menghapus semua data dari sesi yang di logout
        session()->invalidate(); //untuk membatalkan sesi yang di logout agar sesi tersebut tidak dapat digunakan kembali
        return redirect('/login'); //mengalihkan ke halaman login setelah logout
    }
    public function authenticate(Request $request){
        $email = $request->email; //membuat variabel email dan memberi nilai dari properti email dari objek request
        $password = $request->password; //membuat variabel password dan memberi nilai dai properti password dari objek request

        $payload = [
            'email' => $email,
            'password' => $password,
        ];//variabel payload yang berupa array untuk membungkus dua properti email dan password
        $auth = HttpClient::fetch( //fetching data (intruksi di file HttpClient), 
            "POST" , //method untuk mengirim data ke server untuk diproses
            "http://localhost:8000/api/login", // alamat local host dan terdapat endpoint '/api/login'
            $payload, //variabel berupa array yang berisi email dan pasword yang telah dibuat sebelumnya
        );
        if ($auth['status']==false){
            return redirect()->back()->with('error'.$auth['data'], $auth['message']); // jika kondisi atau status salah, maka halaman akan dialihkan kembali dihalaman login dan beserta keterangan eror
        } 
        if (!session()->isStarted()){ // mengecek sesion mulai atau belum, jika session belum dimulai maka sesi akan memulai sesi baru
            session()->start(); //memulai sesi baru
        }
        $token = $auth['data']['auth']['token']; //variabel token dengan nilai dari properti token dalam variabel auth.  untuk mendapat nilai dari kunci token ??
        $token_type = $auth['data']['auth']['token_type'];
        session()->put("token", "$auth_type $token"); //menambahkan nilai dari token yang diperoleh dalam sesi saat login
        session()->put("role", $auth['data']['user']['id_role']);
        session()->put("id_user", $auth['data']['user']['id']);
        return redirect ('/profile');
    }
}