<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Profile;

class Profiles extends Component
{
    public function render()
    {
        $profiles = Profile::all();

        return view('livewire.frontend.profiles', compact('profiles'))
            ->layout('layouts.frontend');
    }
}
