<?php

namespace App\Livewire\Admin\Profiles;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;

    public $name = '';
    public $education = '';
    public $profession = '';
    public $family_details = '';
    public $phone = '';
    public $gender = '';
    public $date_of_birth = '';
    public $age = '';
    public $height = '';
    public $city = '';
    public $caste = '';
    public $sect = '';
    public $marital_status = '';
    public $image;
    public $desired_age_from = '';
    public $desired_age_to = '';
    public $desired_education = '';
    public $other_requirements = '';

    protected function rules(): array
    {
        return [

            // Basic Information
            'image' => ['nullable', 'image', 'max:2048'],

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

            // Partner Preference
            'desired_age_from' => ['nullable', 'integer', 'min:18', 'max:100'],

            'desired_age_to' => ['nullable', 'integer', 'min:18', 'max:100'],

            'desired_education' => ['nullable', 'string', 'max:255'],

            'other_requirements' => ['nullable', 'string'],

            // Contact
            'phone' => ['required', 'string', 'max:20'],

        ];
    }

    protected function messages(): array
    {
        return [

            'name.required' => 'Name is required.',

            'gender.required' => 'Please select gender.',

            'age.required' => 'Age is required.',

            'city.required' => 'City is required.',

            'caste.required' => 'Caste is required.',

            'marital_status.required' => 'Please select marital status.',

            'education.required' => 'Education is required.',

            'profession.required' => 'Profession is required.',

            'phone.required' => 'Phone number is required.',

        ];
    }

    public function updatedDateOfBirth()
    {
        if ($this->date_of_birth) {
            $this->age = \Carbon\Carbon::parse($this->date_of_birth)->age;
        }
    }

    protected function generateProfileId(): string
    {
        do {
            $profileId = 'WR-' . str_pad((string) random_int(1, 999999), 6, '0', STR_PAD_LEFT);
        } while (Profile::where('profile_id', $profileId)->exists());

        return $profileId;
    }

    public function save()
    {
        // dd([
        //     'user_id' => Auth::id(),

        //     // Custom Profile ID
        //     'profile_id' => $this->generateProfileId(),

        //     // Personal Details
        //     'name' => $this->name,
        //     'gender' => $this->gender,
        //     'age' => $this->age,
        //     'height' => $this->height,
        //     'city' => $this->city,
        //     'caste' => $this->caste,
        //     'sect' => $this->sect,
        //     'marital_status' => $this->marital_status,

        //     // Education
        //     'education' => $this->education,
        //     'profession' => $this->profession,

        //     // Family
        //     'family_details' => $this->family_details,

        //     // Desired Partner
        //     'desired_age_from' => $this->desired_age_from,
        //     'desired_age_to' => $this->desired_age_to,
        //     'desired_education' => $this->desired_education,
        //     'other_requirements' => $this->other_requirements,

        //     // Contact
        //     'phone' => $this->phone,

        //     // Image
        //     'image' => $this->image,

        //     // Status
        //     'is_verified' => false,
        //     'is_paid' => false,
        //     'is_active' => true,
        //     'is_featured' => false,

        //     // Other
        //     'slug' => Str::slug($this->name) . '-' . Str::lower(Str::random(5)),
        //     'date_of_birth' => $this->date_of_birth,
        //     'verified_at' => null,
        //     'status' => 'pending',
        // ]);

        $validated = $this->validate();
        // dd($validated);
        DB::transaction(function () use ($validated) {

            if ($this->image) {
                $validated['image'] = $this->image->store('profiles', 'public');
            }

            $profile = Profile::create([

                'user_id' => Auth::id(),

                'profile_id' => $this->generateProfileId(),

                'slug' => Str::slug($validated['name']) . '-' . Str::lower(Str::random(5)),

                'name' => $validated['name'],
                'gender' => $validated['gender'],
                'date_of_birth' => $validated['date_of_birth'],
                'age' => $validated['age'],
                'height' => $validated['height'],
                'city' => $validated['city'],
                'caste' => $validated['caste'],
                'sect' => $validated['sect'],
                'marital_status' => $validated['marital_status'],

                'education' => $validated['education'],
                'profession' => $validated['profession'],

                'family_details' => $validated['family_details'],

                'desired_age_from' => $validated['desired_age_from'],
                'desired_age_to' => $validated['desired_age_to'],
                'desired_education' => $validated['desired_education'],
                'other_requirements' => $validated['other_requirements'],

                'phone' => $validated['phone'],

                'image' => $validated['image'] ?? null,

                // Default values
                'status' => 'pending',
                'is_verified' => false,
                'is_paid' => false,
                'is_active' => true,
                'is_featured' => false,

            ]);

            $profile->update([
                'slug' => Str::slug($profile->name) . '-' . $profile->id,
            ]);
        });

        session()->flash('success', 'Profile created successfully.');

        return $this->redirectRoute('admin.profiles.index', navigate: true);
    }
    public function render()
    {
        return view('livewire.admin.profiles.create');
    }
}
