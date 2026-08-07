<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            // User who created this profile
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            // Custom Profile ID
            $table->string('profile_id')->unique();

            // Personal Details
            $table->string('name');
            $table->enum('gender', ['Male', 'Female']);
            $table->unsignedTinyInteger('age');
            $table->string('height')->nullable();
            $table->string('city');
            $table->string('caste');
            $table->string('sect')->nullable();

            $table->enum('marital_status', [
                'Single',
                'Married',
                'Divorced',
                'Widowed'
            ]);

            // Education
            $table->string('education');
            $table->string('profession');

            // Family
            $table->text('family_details')->nullable();

            // Desired Partner
            $table->unsignedTinyInteger('desired_age_from')->nullable();
            $table->unsignedTinyInteger('desired_age_to')->nullable();
            $table->string('desired_education')->nullable();
            $table->text('other_requirements')->nullable();

            // Contact
            $table->string('phone', 20);

            // Image
            $table->string('image')->nullable();

            // Status
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_paid')->default(false);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);

            $table->string('slug')->unique()->nullable();
            $table->date('date_of_birth')->nullable();

            $table->timestamp('verified_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
