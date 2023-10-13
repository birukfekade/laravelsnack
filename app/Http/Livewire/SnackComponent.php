<?php

namespace App\Http\Livewire;

use App\Models\Snack;
use App\Services\SnackApiWrapper;
use Livewire\Component;

class SnackComponent extends Component
{
    
    public $snacks;

    public function mount()
    {
        $snackApiService = new SnackApiWrapper();
        $this->snacks = $snackApiService->getSnacks();
        // $this->snacks = Snack::all();
        // dd($this->snacks);
        $this->snacks = $this->snacks['snacks'];
    }

    public function render()
    {
        return view('livewire.snack-component')->layout('layouts.app'); // Specify the layout name here
    }
}