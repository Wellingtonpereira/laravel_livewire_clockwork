<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Steps extends Component
{

    public $steps = 1;

    public function render()
    {
        return view('livewire.steps');
    }

    #[On('moveStep')]
    public function setStep($step)
    {
        $this->steps = $step;
    }

}
