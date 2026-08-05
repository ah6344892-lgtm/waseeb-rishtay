<?php

namespace App\Livewire\Frontend;

use App\Models\Profile;
use Illuminate\Http\Request;
use Livewire\Component;

class ProfileDetail extends Component
{
    public $profile;

    public function mount($profile_id)
    {
        $this->profile = Profile::where('profile_id', $profile_id)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.frontend.profile-detail')
            ->layout('layouts.frontend');
    }
}
