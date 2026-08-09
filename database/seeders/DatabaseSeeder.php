<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'super-admin@gmail.com',
            'password' => 'password',
        ]);

        $this->call([
            RolePermissionSeeder::class,
            ProfileSeeder::class,
        ]);

        $user = User::where('email', 'admin@gmail.com')->first();

        if ($user) {
            $user->assignRole('super-admin');
        }
    }
}
