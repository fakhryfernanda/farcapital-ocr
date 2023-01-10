<?php

namespace App\Http\Livewire\Features;

use App\Helpers\HttpClient;
use Livewire\Component;

class Profile extends Component
{
    public $responseData;

    public function mount($id = null)
    {
        if (!isset($id)) {
            $this->responseData = HttpClient::fetch(
                "GET",
                "http://localhost:8000/api/identity/{$id}"
            );
        }
    }

    public function render()
    {
        if (!isset($this->responseData)) {
            $id = session('id_user');
            
            $responseData = HttpClient::fetch(
                "GET",
                "http://localhost:8000/api/identity/{$id}"
            );

            $data = $responseData["data"];
        } else {
            $data = $this->responseData["data"];
        }

        return view(
            'livewire.features.profile',
            ['data' => $data]
        );
    }
}
