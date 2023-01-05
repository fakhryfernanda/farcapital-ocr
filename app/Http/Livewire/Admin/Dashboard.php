<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $users = [
        [
            'nama' => 'Fakry',
            'nik' => '330508030420000001',
            'tempat_lahir' => 'Bekasi',
            'tanggal_lahir' => '03/04/2000',
            'jenis_kelamin' => 'L',
            'golongan_darah' => 'A',
            'alamat' => 'Bekasi',
            'rt' => '004',
            'rw' => '004',
            'desa' => 'Tambun Selatan',
            'kecamatan' => 'Tambun',
            'agama' => 'Islam',
            'status_perkawinan' => 'belum kawin',
            'pekerjaan' => 'mahasiswa',
            'kewarganegaraan' => 'WNI',
            'berlaku_hingga' => 'seumur hidup'
        ],
        [
            'nama' => 'Fakry',
            'nik' => '330508030420000001',
            'tempat_lahir' => 'Bekasi',
            'tanggal_lahir' => '03/04/2000',
            'jenis_kelamin' => 'L',
            'golongan_darah' => 'A',
            'alamat' => 'Bekasi',
            'rt' => '004',
            'rw' => '004',
            'desa' => 'Tambun Selatan',
            'kecamatan' => 'Tambun',
            'agama' => 'Islam',
            'status_perkawinan' => 'belum kawin',
            'pekerjaan' => 'mahasiswa',
            'kewarganegaraan' => 'WNI',
            'berlaku_hingga' => 'seumur hidup'
        ]
    ];
    public function filter (){
        for ($i = 0; $i < count($this->users); $i++) {
            if ($this->users[$i]['jenis_kelamin'] == 'L'){
                $this->users[$i]['jenis_kelamin'] = 'Laki-laki';
            } else {
                $this->users[$i]['jenis_kelamin'] = 'Perempuan';
            };
        }
    }
    public function render()
    {
        $this->filter();
        return view('livewire.admin.dashboard', $this->users);
    }
}