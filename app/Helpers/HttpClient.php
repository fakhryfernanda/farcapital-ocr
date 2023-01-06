<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades;

class HttpClient
{

    static function fetch($method, $url, $body = [], $files = [])
    {
        $headers = [];
        $token = session()->get("token", "");
        if ($token != "") {
            $headers["Authorization"] = $token;
        }

        if ($method == "GET") {
            return Http::withHeaders($headers)->get($url)->json();
        }
        //jika terdapat file, client berupa multipart
        if (sizeof($files) > 0) {
            $client = Http::asMultipart()->withHeaders($headers);
            // dd($files);
            //attach setiap file pada client

            foreach ($files as $key => $file) {
                $path = $file->getPathname();
                $name = $file->getClientOriginalName();
                //attach file (sisipkan file)
                $client->attach($key, file_get_contents($path), $name);
                // dd($key, $path, $name);
            }

            //fetch api
            return $client->post($url, $body)->json();
        }

        //fetch api
        return Http::withHeaders($headers)->post($url, $body)->json();
    }
}
