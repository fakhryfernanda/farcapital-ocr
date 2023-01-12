<?php

namespace App\Http\Livewire\Features;

use App\Helpers\HttpClient;
use Livewire\Component;

class Profile extends Component
{
    public $responseData;
    public $identity;

    public function mount($id = null)
    {
        if (isset($id)) {
            $this->responseData = HttpClient::fetch(
                "GET",
                "http://localhost:8000/api/identity/{$id}"
            );

            $this->identity = $this->responseData["data"];
        } else {
            $id = session('id_user');
            
            $responseData = HttpClient::fetch(
                "GET",
                "http://localhost:8000/api/identity/{$id}"
            );

            // Jika belum punya data identitas
            if (!$responseData['status']) {
                return redirect('/upload');
            }

            $this->identity = $responseData["data"];

            $nama_bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        
            $arr = explode('-', $this->identity['tanggal_lahir']);
            $bulan = $nama_bulan[$arr[1]-1];
            $this->identity['tanggal_lahir'] = $arr[2] . " " . $bulan . " " . $arr[0];
        }
    }

    public function render()
    {
        return view(
            'livewire.features.profile',
            ['data' => $this->identity]
        );
    }
}