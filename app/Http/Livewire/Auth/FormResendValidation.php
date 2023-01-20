<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class FormResendValidation extends Component
{

    public function render()
    {
        $data = [
            'link' => $request->getSchemeAndHttpHost(),
            'target' => 'emailvalidation'

        ];
        return view('livewire.auth.form-resend-validation', $data);
    }
}
