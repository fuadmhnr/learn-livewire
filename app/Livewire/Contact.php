<?php

namespace App\Livewire;

use Livewire\Component;

#[\Livewire\Attributes\Title('Contact')]
class Contact extends Component
{
    public function render()
    {
        sleep(3);

        return view('livewire.contact');
    }
}
