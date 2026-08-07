<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Profile;
use Livewire\WithPagination;

class Profiles extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $sort = 'newest';

    public function updatedSort()
    {
        $this->resetPage();
    }
    public function render()
    {
        $profile = Profile::query();

        switch ($this->sort) {
            case 'oldest':
                $profile->oldest();
                break;
            case 'age_low':
                $profile->orderBy('age', 'asc');
                break;
            case 'age_high':
                $profile->orderBy('age', 'desc');
                break;
            default:
                $profile->latest();
                break;
        }

        $profiles = $profile->paginate(6);

        return view('livewire.frontend.profiles', compact('profiles'))
            ->layout('layouts.frontend');
    }
}
