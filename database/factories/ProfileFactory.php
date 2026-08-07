<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['Male', 'Female']);

        return [
            'user_id' => User::factory(),

            'profile_id' => 'WR' . fake()->unique()->numerify('######'),

            'name' => fake()->name($gender === 'Male' ? 'male' : 'female'),

            'gender' => $gender,

            'age' => fake()->numberBetween(18, 40),

            'height' => fake()->randomElement([
                "5'2\"",
                "5'4\"",
                "5'6\"",
                "5'8\"",
                "5'10\"",
                "6'0\"",
            ]),

            'city' => fake()->randomElement([
                'Lahore',
                'Karachi',
                'Islamabad',
                'Multan',
                'Faisalabad',
                'Bahawalpur',
            ]),

            'caste' => fake()->randomElement([
                'Rajput',
                'Jutt',
                'Arain',
                'Sheikh',
                'Malik',
                'Syed',
            ]),

            'sect' => fake()->randomElement([
                'Sunni',
                'Shia',
            ]),

            'marital_status' => fake()->randomElement([
                'Single',
                'Married',
                'Divorced',
                'Widowed',
            ]),

            'education' => fake()->randomElement([
                'Matric',
                'Intermediate',
                'Bachelor',
                'Master',
                'PhD',
            ]),

            'profession' => fake()->jobTitle(),

            'family_details' => fake()->sentence(),

            'desired_age_from' => fake()->numberBetween(18, 25),

            'desired_age_to' => fake()->numberBetween(26, 35),

            'desired_education' => fake()->randomElement([
                'Intermediate',
                'Bachelor',
                'Master',
            ]),

            'other_requirements' => fake()->paragraph(),

            'phone' => '03' . fake()->numerify('#########'),

            'image' => 'profiles/default.jpg',

            'is_verified' => fake()->boolean(70),

            'is_paid' => fake()->boolean(30),

            'is_active' => true,

            'is_featured' => fake()->boolean(20),

            'verified_at' => now(),
        ];
    }
}
