<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class ChangePassword extends Component
{
    public $token;
    public function mount($token){
        $this->token = $token;
    }
    public function render()
    {
        return view('livewire.auth.change-password',['token' => $this->token]);
    }
}
