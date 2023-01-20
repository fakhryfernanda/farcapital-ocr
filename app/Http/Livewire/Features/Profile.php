<?php

namespace App\Http\Livewire\Features;

use App\Helpers\HttpClient;
use Livewire\Component;
use PHPUnit\Framework\MockObject\Builder\Identity;

class Profile extends Component
{

    public $responseData;
    public $identity;

    public function mount($id = null)
    {
        $this->identity = ['id' => $id];
    }

    public function render()
    {
        return view(
            'livewire.features.profile',
            $this->identity
        );
    }
}
