<?php

namespace App\Livewire\Admin;

use App\Models\Profile;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    // Statistics
    public int $totalUsers = 0;
    public int $totalProfiles = 0;
    public int $pendingProfiles = 0;
    public int $approvedProfiles = 0;
    public int $rejectedProfiles = 0;
    public int $premiumMembers = 0;

    // Activity
    public int $pendingApprovals = 0;
    public int $unreadMessages = 0;
    public int $newUsersToday = 0;
    public int $expiredMemberships = 0;

    // Tables
    public $recentUsers = [];
    public $recentProfiles = [];
    public function mount(): void
    {
        $this->loadStatistics();
        $this->loadRecentUsers();
        $this->loadRecentProfiles();
    }

    protected function loadStatistics(): void
    {
        $this->totalUsers = User::count();

        $this->newUsersToday = User::whereDate(
            'created_at',
            today()
        )->count();

        // Profile statistics
        $this->totalProfiles = Profile::count();

        $this->pendingProfiles = Profile::where('status', 'pending')->count();

        $this->approvedProfiles = Profile::where('status', 'approved')->count();

        $this->rejectedProfiles = Profile::where('status', 'rejected')->count();

        $this->pendingApprovals = $this->pendingProfiles;

        // Future modules
        // $this->premiumMembers = 0;
        // $this->expiredMemberships = 0;
        // $this->unreadMessages = 0;
    }

    protected function loadRecentUsers(): void
    {
        $this->recentUsers = User::query()
            ->select('id', 'name', 'email', 'created_at')
            ->latest()
            ->take(5)
            ->get();
    }

    protected function loadRecentProfiles(): void
    {
        $this->recentProfiles = Profile::query()
            ->select(
                'id',
                'name',
                'gender',
                'city',
                'status',
                'created_at'
            )
            ->latest()
            ->take(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
