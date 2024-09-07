<?php

namespace App\Livewire;

use App\Models\Guide;
use Livewire\Component;

class Journey extends Component
{
    public $showGuide;
    public $currentGuide;

    public function guide($true)
    {
        $this->showGuide = $true;
    }

    public function change()
    {
        $this->currentGuide = Guide::query()->where('id', '<>', $this->currentGuide->id)->first();
    }

    public function mount()
    {
        $this->currentGuide = Guide::query()->first();
    }

    public function render()
    {
        return view('livewire.journey');
    }
}
