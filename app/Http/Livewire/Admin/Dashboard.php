<?php

namespace App\Http\Livewire\Admin;

use App\Helpers\HttpClient;
use Livewire\Component;

class Dashboard extends Component
{


    public function render()
    {
        $responseData = HttpClient::fetch(
            "GET",
            "http://localhost:8000/api/dashboard"
        );
        // dd($responseData);
        $data = $responseData["data"];
        return view('livewire.admin.dashboard', [
            'data' => $data
        ]);
    }
}
