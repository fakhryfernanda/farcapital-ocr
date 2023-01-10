<?php

namespace App\Http\Livewire\Features;

use App\Helpers\HttpClient;
use Livewire\Component;

class Profile extends Component
{
    public $responseData;

    public function mount($id)
    {
        $this->responseData = HttpClient::fetch(
            "GET",
            "http://localhost:8000/api/identity/{$id}"
        );
    }

    public function render()
    {
        // $id = session('id_user');

        // $responseData = HttpClient::fetch(
        //     "GET",
        //     "http://localhost:8000/api/identity/{$id}"
        // );


        $data = $this->responseData["data"];
        // dd($data);

        return view(
            'livewire.features.profile',
            ['data' => $data]
        );
    }
}
