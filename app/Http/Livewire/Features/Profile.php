<?php

namespace App\Http\Livewire\Features;

use App\Helpers\HttpClient;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $responseData = HttpClient::fetch(
            "GET",
            "http://localhost:8000/api/identity"
        );

        // dd($responseData[0]);
        $data = $responseData["data"];

        return view(
            'livewire.features.profile',
            ['data' => $data]
        );
    }
}
