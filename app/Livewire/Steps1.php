<?php

namespace App\Livewire;

use Livewire\Component;

class Steps1 extends Component
{
    public function render()
    {
        return view('livewire.steps1');
    }

    public function moveStep($step)
    {
        $this->dispatch('moveStep', $step);
    }
}
