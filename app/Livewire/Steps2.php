<?php

namespace App\Livewire;

use Livewire\Component;

class Steps2 extends Component
{
    public function render()
    {
        return view('livewire.steps2');
    }

    public function moveStep($step)
    {
        $this->dispatch('moveStep', $step);
    }
}
