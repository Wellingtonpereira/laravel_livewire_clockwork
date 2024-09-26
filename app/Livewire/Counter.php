<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $total = 0;

    public function soma()
    {
        $this->total++;
    }
    
    public function render()
    {
        return view('livewire.counter');
    }

    public function moveStep($step)
    {
        $this->dispatch('moveStep', $step);
    }
}
