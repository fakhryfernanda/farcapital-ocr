<?php

namespace App\Http\Livewire\Features;

use Livewire\Component;
use App\Helpers\HttpClient;

class Upload extends Component
{
    public function mount() 
    {
        $id = session('id_user');

        $responseData = HttpClient::fetch(
            "GET",
            "http://localhost:8000/api/identity/{$id}"
        );

        if ($responseData['status']) {
            return redirect('/profile');
        }
    }

    public function render()
    {
        return view('livewire.features.upload');
    }
}
