<?php

namespace App\Livewire\Admin\Profiles;

use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;
use Flux\Concerns\InteractsWithComponents;


class Index extends Component
{
    use WithPagination, InteractsWithComponents;

    public string $search = '';
    public string $gender = '';
    public string $status = '';
    public string $verified = '';
    public int $perPage = 10;
    public bool $showDeleteModal = false;
    public ?int $deleteId = null;

    protected $queryString = [
        'search' => ['except' => ''],
        'gender' => ['except' => ''],
        'status' => ['except' => ''],
        'verified' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];

    public function confirmDelete(int $id): void
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function delete(): void
    {
        Profile::findOrFail($this->deleteId)->delete();
        // $this->showDeleteModal = false;
        $this->reset([
            'deleteId',
            'showDeleteModal',
        ]);

        // session()->flash('success', 'Profile deleted successfully.');
        $this->toast(
            variant: 'success',
            heading: 'Success',
            text: 'Profile deleted successfully.'
        );
    }
    public function updating($property)
    {
        if (in_array($property, [
            'search',
            'gender',
            'status',
            'verified',
            'perPage'
        ])) {
            $this->resetPage();
        }
    }

    public function resetFilters()
    {
        $this->reset([
            'search',
            'gender',
            'status',
            'verified',
            'perPage',
        ]);

        $this->perPage = 10;

        $this->resetPage();
    }

    public function approve(Profile $profile): void
    {
        $profile->update([
            'status' => 'approved',
        ]);

        // session()->flash('success', 'Profile approved successfully.');
        $this->toast(
            variant: 'success',
            heading: 'Success',
            text: 'Profile approved successfully.'
        );
    }

    public function reject(Profile $profile): void
    {
        $profile->update([
            'status' => 'rejected',
        ]);

        // session()->flash('success', 'Profile rejected successfully.');
        $this->toast(
            variant: 'success',
            heading: 'Success',
            text: 'Profile rejected successfully.'
        );
    }

    public function toggleVerified(Profile $profile): void
    {
        $profile->update([
            'is_verified' => ! $profile->is_verified,
            'verified_at' => ! $profile->is_verified ? now() : null,
        ]);

        // session()->flash(
        //     'success',
        //     $profile->is_verified
        //         ? 'Profile verified successfully.'
        //         : 'Profile unverified successfully.'
        // );

        $this->toast(
            variant: 'success',
            heading: 'Success',
            text: $profile->is_verified
                ? 'Profile verified successfully.'
                : 'Profile unverified successfully.'
        );
    }

    public function toggleFeatured(Profile $profile): void
    {
        $profile->update([
            'is_featured' => ! $profile->is_featured,
        ]);

        // session()->flash(
        //     'success',
        //     $profile->is_featured
        //         ? 'Profile marked as featured.'
        //         : 'Profile removed from featured.'
        // );

        $this->toast(
            variant: 'success',
            heading: 'Success',
            text: $profile->is_featured
                ? 'Profile marked as featured.'
                : 'Profile removed from featured.'
        );
    }

    public function toggleActive(Profile $profile): void
    {
        $profile->update([
            'is_active' => ! $profile->is_active,
        ]);

        // session()->flash(
        //     'success',
        //     $profile->is_active
        //         ? 'Profile activated successfully.'
        //         : 'Profile deactivated successfully.'
        // );

        $this->toast(
            variant: 'success',
            heading: 'Success',
            text: $profile->is_active
                ? 'Profile activated successfully.'
                : 'Profile deactivated successfully.'
        );
    }

    public function render()
    {
        $profiles = Profile::query()

            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', "%{$this->search}%")
                        ->orWhere('profile_id', 'like', "%{$this->search}%")
                        ->orWhere('phone', 'like', "%{$this->search}%")
                        ->orWhere('age', 'like', "%{$this->search}%")
                        ->orWhere('city', 'like', "%{$this->search}%");
                });
            })

            ->when($this->gender, fn($q) => $q->where('gender', $this->gender))

            ->when($this->status, fn($q) => $q->where('status', $this->status))

            ->when($this->verified !== '', function ($q) {
                $q->where('is_verified', $this->verified);
            })

            ->latest()
            ->paginate($this->perPage);

        return view('livewire.admin.profiles.index', [
            'profiles' => $profiles,

            'totalProfiles' => Profile::count(),
            'maleProfiles' => Profile::where('gender', 'Male')->count(),
            'femaleProfiles' => Profile::where('gender', 'Female')->count(),
            'pendingProfiles' => Profile::where('status', 'pending')->count(),
            'stats' => [
                'total' => Profile::count(),
                'pending' => Profile::where('status', 'pending')->count(),
                'approved' => Profile::where('status', 'approved')->count(),
                'rejected' => Profile::where('status', 'rejected')->count(),
            ],
        ]);
    }
}
