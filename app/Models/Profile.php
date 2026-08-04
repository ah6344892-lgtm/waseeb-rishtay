<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'user_id',
        'profile_id',

        'name',
        'gender',
        'age',
        'height',
        'city',
        'caste',
        'sect',
        'marital_status',

        'education',
        'profession',

        'family_details',

        'desired_age_from',
        'desired_age_to',
        'desired_education',
        'other_requirements',

        'phone',

        'image',

        'is_verified',
        'is_paid',
        'is_active',
        'is_featured',

        'verified_at',
    ];

    protected $casts = [
        'is_verified' => 'boolean',
        'is_paid' => 'boolean',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',

        'verified_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::creating(function ($profile) {

            if (!$profile->profile_id) {

                $lastId = self::max('id') + 1;

                $profile->profile_id = 'WR' . str_pad($lastId, 6, '0', STR_PAD_LEFT);
            }
        });
    }
}
