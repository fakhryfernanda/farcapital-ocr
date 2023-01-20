<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class VerificationSuccess extends Component
{
    public $token;
    public function mount($token){
        $this->token = $token;
    }
    public function render()
    {
        return view('livewire.auth.verification-success',['token' => $this->token]);
    }
}
