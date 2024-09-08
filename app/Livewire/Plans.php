<?php

namespace App\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;

class Plans extends Component
{
    public $currentDate;

    public function mount()
    {
        $this->currentDate = Carbon::now()->toFormattedDateString();
    }

    public function render()
    {
        return view('livewire.plans');
    }
}
