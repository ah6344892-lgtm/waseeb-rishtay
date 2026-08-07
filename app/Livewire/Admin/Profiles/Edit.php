<?php

namespace App\Livewire\Admin\Profiles;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class Edit extends Component
{
    use WithFileUploads;

    public Profile $profile;

    public $image;

    // Personal Details
    public $name;
    public $gender;
    public $date_of_birth;
    public $age;
    public $height;
    public $city;
    public $caste;
    public $sect;
    public $marital_status;

    // Education
    public $education;
    public $profession;

    // Family
    public $family_details;

    // Desired Partner
    public $desired_age_from;
    public $desired_age_to;
    public $desired_education;
    public $other_requirements;

    // Contact
    public $phone;

    public function mount(Profile $profile): void
    {
        $this->profile = $profile;

        // Personal Details
        $this->name = $profile->name;
        $this->gender = $profile->gender;
        $this->date_of_birth = $profile->date_of_birth;
        $this->age = $profile->age;
        $this->height = $profile->height;
        $this->city = $profile->city;
        $this->caste = $profile->caste;
        $this->sect = $profile->sect;
        $this->marital_status = $profile->marital_status;

        // Education
        $this->education = $profile->education;
        $this->profession = $profile->profession;

        // Family
        $this->family_details = $profile->family_details;

        // Desired Partner
        $this->desired_age_from = $profile->desired_age_from;
        $this->desired_age_to = $profile->desired_age_to;
        $this->desired_education = $profile->desired_education;
        $this->other_requirements = $profile->other_requirements;

        // Contact
        $this->phone = $profile->phone;
    }

    protected function rules(): array
    {
        return [

            'image' => ['nullable', 'image', 'max:2048'],

            // Personal Details
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', Rule::in(['Male', 'Female'])],
            'date_of_birth' => ['nullable', 'date'],
            'age' => ['required', 'integer', 'min:18', 'max:100'],
            'height' => ['nullable', 'string', 'max:20'],
            'city' => ['required', 'string', 'max:255'],
            'caste' => ['required', 'string', 'max:255'],
            'sect' => ['nullable', 'string', 'max:255'],
            'marital_status' => [
                'required',
                Rule::in([
                    'Single',
                    'Married',
                    'Divorced',
                    'Widowed',
                ]),
            ],

            // Education
            'education' => ['required', 'string', 'max:255'],
            'profession' => ['required', 'string', 'max:255'],

            // Family
            'family_details' => ['nullable', 'string'],

            // Desired Partner
            'desired_age_from' => ['nullable', 'integer'],
            'desired_age_to' => ['nullable', 'integer'],
            'desired_education' => ['nullable', 'string', 'max:255'],
            'other_requirements' => ['nullable', 'string'],

            // Contact
            'phone' => ['required', 'string', 'max:20'],

        ];
    }

    public function updatedDateOfBirth()
    {
        if ($this->date_of_birth) {
            $this->age = \Carbon\Carbon::parse($this->date_of_birth)->age;
        }
    }

    public function update()
    {
        $validated = $this->validate();

        DB::transaction(function () use ($validated) {

            if ($this->image) {

                if ($this->profile->image && Storage::disk('public')->exists($this->profile->image)) {
                    Storage::disk('public')->delete($this->profile->image);
                }

                $validated['image'] = $this->image->store('profiles', 'public');
            } else {

                $validated['image'] = $this->profile->image;
            }

            $this->profile->update([

                // Personal
                'name' => $validated['name'],
                'gender' => $validated['gender'],
                'date_of_birth' => $validated['date_of_birth'],
                'age' => $validated['age'],
                'height' => $validated['height'],
                'city' => $validated['city'],
                'caste' => $validated['caste'],
                'sect' => $validated['sect'],
                'marital_status' => $validated['marital_status'],

                // Education
                'education' => $validated['education'],
                'profession' => $validated['profession'],

                // Family
                'family_details' => $validated['family_details'],

                // Desired Partner
                'desired_age_from' => $validated['desired_age_from'],
                'desired_age_to' => $validated['desired_age_to'],
                'desired_education' => $validated['desired_education'],
                'other_requirements' => $validated['other_requirements'],

                // Contact
                'phone' => $validated['phone'],

                // Image
                'image' => $validated['image'],

            ]);
        });

        session()->flash('success', 'Profile updated successfully.');

        return $this->redirectRoute('admin.profiles.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.profiles.edit');
    }
}
