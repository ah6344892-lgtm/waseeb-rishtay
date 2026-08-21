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
    public string $search = '';
    public string $gender = '';
    public string $age = '';
    public string $caste = '';
    public string $sect = '';
    public string $city = '';
    public string $education = '';

    public function updated($property)
    {
        if (in_array($property, [
            'search',
            'gender',
            'age',
            'caste',
            'sect',
            'city',
            'education',
        ])) {
            $this->resetPage();
        }
    }

    public function resetFilters()
    {
        $this->reset([
            'search',
            'gender',
            'age',
            'caste',
            'sect',
            'city',
            'education',
        ]);

        $this->resetPage();
    }

    public function updatedSort()
    {
        $this->resetPage();
    }

    public function render()
    {
        /*
    |--------------------------------------------------------------------------
    | Profiles Query
    |--------------------------------------------------------------------------
    */

        $query = Profile::query()
            ->where('status', 'approved');


        /*
    |--------------------------------------------------------------------------
    | Search
    |--------------------------------------------------------------------------
    */

        $query->when($this->search, function ($query) {

            $query->where(function ($q) {

                $q->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('profile_id', 'like', '%' . $this->search . '%')
                    ->orWhere('profession', 'like', '%' . $this->search . '%');
            });
        });


        /*
    |--------------------------------------------------------------------------
    | Gender
    |--------------------------------------------------------------------------
    */

        $query->when($this->gender, function ($query) {

            $query->where('gender', $this->gender);
        });


        /*
    |--------------------------------------------------------------------------
    | Caste
    |--------------------------------------------------------------------------
    */

        $query->when($this->caste, function ($query) {

            $query->where('caste', $this->caste);
        });


        /*
    |--------------------------------------------------------------------------
    | Sect
    |--------------------------------------------------------------------------
    */

        $query->when($this->sect, function ($query) {

            $query->where('sect', $this->sect);
        });


        /*
    |--------------------------------------------------------------------------
    | City
    |--------------------------------------------------------------------------
    */

        $query->when($this->city, function ($query) {

            $query->where('city', $this->city);
        });


        /*
    |--------------------------------------------------------------------------
    | Education
    |--------------------------------------------------------------------------
    */

        $query->when($this->education, function ($query) {

            $query->where('education', $this->education);
        });


        /*
    |--------------------------------------------------------------------------
    | Age
    |--------------------------------------------------------------------------
    */

        $query->when($this->age, function ($query) {

            match ($this->age) {

                '18-25' => $query->whereBetween('age', [18, 25]),

                '26-30' => $query->whereBetween('age', [26, 30]),

                '31-35' => $query->whereBetween('age', [31, 35]),

                '36+' => $query->where('age', '>=', 36),

                default => null,
            };
        });


        /*
    |--------------------------------------------------------------------------
    | Sorting
    |--------------------------------------------------------------------------
    */

        switch ($this->sort) {

            case 'oldest':

                $query->oldest();

                break;


            case 'age_low':

                $query->orderBy('age', 'asc');

                break;


            case 'age_high':

                $query->orderBy('age', 'desc');

                break;


            default:

                $query->latest();

                break;
        }


        /*
    |--------------------------------------------------------------------------
    | Get Profiles
    |--------------------------------------------------------------------------
    */

        $profiles = $query->paginate(12);


        /*
    |--------------------------------------------------------------------------
    | Available Cities
    |--------------------------------------------------------------------------
    */

        $cities = Profile::where('status', 'approved')
            ->whereNotNull('city')
            ->where('city', '!=', '')
            ->distinct()
            ->orderBy('city')
            ->pluck('city');


        /*
    |--------------------------------------------------------------------------
    | Available Education
    |--------------------------------------------------------------------------
    */

        $educations = Profile::where('status', 'approved')
            ->whereNotNull('education')
            ->where('education', '!=', '')
            ->distinct()
            ->orderBy('education')
            ->pluck('education');


        /*
    |--------------------------------------------------------------------------
    | Available Castes
    |--------------------------------------------------------------------------
    */

        $castes = Profile::where('status', 'approved')
            ->whereNotNull('caste')
            ->where('caste', '!=', '')
            ->distinct()
            ->orderBy('caste')
            ->pluck('caste');


        /*
    |--------------------------------------------------------------------------
    | Available Sects
    |--------------------------------------------------------------------------
    */

        $sects = Profile::where('status', 'approved')
            ->whereNotNull('sect')
            ->where('sect', '!=', '')
            ->distinct()
            ->orderBy('sect')
            ->pluck('sect');


        /*
    |--------------------------------------------------------------------------
    | Return View
    |--------------------------------------------------------------------------
    */

        return view(
            'livewire.frontend.profiles',
            compact(
                'profiles',
                'cities',
                'educations',
                'castes',
                'sects'
            )
        )->layout('layouts.frontend');
    }
}
