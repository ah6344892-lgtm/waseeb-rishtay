<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Profile;

class Home extends Component
{
    public function render()
    {
        $profiles = Profile::where('status', 'approved')->latest()->take(6)->get();

        return view('livewire.frontend.home', compact('profiles'))
            ->layout('layouts.frontend');
    }
}
