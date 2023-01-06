<?php

namespace App\Http\Livewire\Features;

use Livewire\Component;

class Edit extends Component
{
    public $nama = 'Fakhry';
    public $nik ='330508030420000001';
    public $tempat_lahir ='Bekasi';
    public $tanggal_lahir = '2000-03-23';
    public $jenis_kelamin = 'P'; 
    public $golongan_darah = 'B';
    public $alamat= 'Tambun selatan';
    public $rt = '004';
    public $rw = '004';
    public $kelurahan = 'Tambun selatan';
    public $kecamatan = 'Tambun';
    public $kota = 'Bekasi';
    public $provinsi = 'Jawa Barat';
    public $agama = 'Islam';
    public $status_perkawinan = 'cerai_mati';
    public $pekerjaan = 'Programmer';
    public $kewarganegaraan = 'wna';

    public function edit (){
    
    }

    
    public function render()
    {
        return view('livewire.features.edit');
    }
}