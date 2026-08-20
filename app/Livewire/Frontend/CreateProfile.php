<?php

namespace App\Livewire\Frontend;

use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProfile extends Component
{
    use WithFileUploads;

    // Personal Details
    public string $name;
    public string $gender;
    public $age;
    public $height;
    public $city;
    public $caste;
    public $sect;
    public $marital_status;
    public $phone;

    // Education
    public $education;
    public $profession;

    // Family
    public $family_details;

    // Desired Partner
    public $partner_age;
    public $partner_height;
    public $partner_city;
    public $partner_education;
    public $partner_profession;
    public $partner_marital_status;
    public $partner_caste;
    public $partner_sect;
    public $partner_family_details;

    // Image
    public $image;


    // $profile = Profile::where('user_id', auth()->id());

    public function mount()
    {
        $profile = Profile::where('user_id', auth()->id())->first();

        if ($profile) {
            return redirect()->route('profile_detail', $profile->profile_id);
        }
    }

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:Male,Female'],
            'age' => ['required', 'integer', 'min:18', 'max:100'],
            'height' => ['nullable', 'string', 'max:50'],
            'city' => ['required', 'string', 'max:255'],
            'caste' => ['required', 'string', 'max:255'],
            'sect' => ['nullable', 'string', 'max:255'],
            'marital_status' => [
                'required',
                'in:Single,Married,Divorced,Widowed'
            ],
            'phone' => ['required', 'string', 'max:20'],

            'education' => ['required', 'string', 'max:255'],
            'profession' => ['required', 'string', 'max:255'],

            'family_details' => ['nullable', 'string'],

            'partner_age' => ['nullable', 'string', 'max:100'],
            'partner_height' => ['nullable', 'string', 'max:100'],
            'partner_city' => ['nullable', 'string', 'max:255'],
            'partner_education' => ['nullable', 'string', 'max:255'],
            'partner_profession' => ['nullable', 'string', 'max:255'],
            'partner_marital_status' => ['nullable', 'string', 'max:255'],
            'partner_caste' => ['nullable', 'string', 'max:255'],
            'partner_sect' => ['nullable', 'string', 'max:255'],
            'partner_family_details' => ['nullable', 'string'],

            'image' => [
                'nullable',
                'image',
                'max:2048',
                'mimes:jpg,jpeg,png,webp'
            ],
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        $profile = Profile::where('user_id', auth()->id())->first();

        /*
        |--------------------------------------------------------------------------
        | Prevent Duplicate Profile
        |--------------------------------------------------------------------------
        */

        if ($profile) {
            session()->flash(
                'error',
                'You already have a profile.'
            );

            return redirect()->route('profile_detail', $profile->profile_id);
        }

        DB::transaction(function () use ($validated) {

            /*
            |--------------------------------------------------------------------------
            | Profile Image
            |--------------------------------------------------------------------------
            */

            $imagePath = null;

            if ($this->image) {
                $imagePath = $this->image->store(
                    'profiles',
                    'public'
                );
            }

            /*
            |--------------------------------------------------------------------------
            | Create Profile
            |--------------------------------------------------------------------------
            */

            Profile::create([

                'user_id' => auth()->id(),

                'profile_id' => $this->generateProfileId(),

                'phone' => $validated['phone'],

                'name' => $validated['name'],
                'gender' => $validated['gender'],
                'age' => $validated['age'],
                'height' => $validated['height'] ?? null,
                'city' => $validated['city'],
                'caste' => $validated['caste'],
                'sect' => $validated['sect'] ?? null,
                'marital_status' => $validated['marital_status'],

                'education' => $validated['education'],
                'profession' => $validated['profession'],

                'family_details' =>
                $validated['family_details'] ?? null,

                /*
                |--------------------------------------------------------------------------
                | Desired Partner
                |--------------------------------------------------------------------------
                */

                'partner_age' =>
                $validated['partner_age'] ?? null,

                'partner_height' =>
                $validated['partner_height'] ?? null,

                'partner_city' =>
                $validated['partner_city'] ?? null,

                'partner_education' =>
                $validated['partner_education'] ?? null,

                'partner_profession' =>
                $validated['partner_profession'] ?? null,

                'partner_marital_status' =>
                $validated['partner_marital_status'] ?? null,

                'partner_caste' =>
                $validated['partner_caste'] ?? null,

                'partner_sect' =>
                $validated['partner_sect'] ?? null,

                'partner_family_details' =>
                $validated['partner_family_details'] ?? null,

                /*
                |--------------------------------------------------------------------------
                | Image
                |--------------------------------------------------------------------------
                */

                'image' => $imagePath,

                /*
                |--------------------------------------------------------------------------
                | Default Status
                |--------------------------------------------------------------------------
                */

                'status' => 'pending',
            ]);
        });

        session()->flash(
            'success',
            'Your profile has been submitted successfully. It is now waiting for admin approval.'
        );

        $profile = Profile::where('user_id', auth()->id())->first();

        return redirect()->route('profile_detail', $profile->profile_id);
    }

    private function generateProfileId()
    {
        do {
            $profileId = 'WR-' . strtoupper(
                substr(uniqid(), -6)
            );
        } while (
            Profile::where('profile_id', $profileId)->exists()
        );

        return $profileId;
    }

    public function render()
    {
        return view('livewire.frontend.create-profile')
            ->layout('layouts.frontend');
    }
}
