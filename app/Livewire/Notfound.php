<?php

namespace App\Livewire;

use Livewire\Component;

class Notfound extends Component
{
    public function render()
    {
        return view('livewire.notfound');
    }

    public function moveStep($step)
    {
        $this->dispatch('moveStep', $step);
    }
}
