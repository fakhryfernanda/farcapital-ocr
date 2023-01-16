<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Http\Request;
use Livewire\Component;

class ForgotPassword extends Component
{
    public function render(Request $request)
    {

        $data = [
            'link' => $request->getSchemeAndHttpHost(),
            'from' => 'forgotpassword',
            'target' => 'changepassword'
        ];

        return view('livewire.auth.forgot-password',$data);
    }
}
