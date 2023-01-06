<?php

namespace App\Http\Livewire\Features;

use Livewire\Component;

class Edit extends Component
{
    public $nama = 'fakhry';
    public $nik ='330508030420000001';
    public $tempat_lahir ='Bekasi';
    public $tanggal_lahir = '04/03/2000';
    public $jenis_kelamin = 'L'; 
    public $golongan_darah = 'A';
    public $alamat= 'Tambun selatan';
    public $rt = '004';
    public $rw = '004';
    public $kelurahan = 'Tambun selatan';
    public $kecamatan = 'Tambun';
    public $kota = 'Bekasi';
    public $provinsi = 'Jawa Barat';
    public $agama = 'Islam';
    public $status_perkawinan = 'Belum nikah';
    public $pekerjaan = 'programmer';
    public $kewarganegaraan = 'WNI';

    public function edit (){
    
    }

    
    public function render()
    {
        return view('livewire.features.edit');
    }
}