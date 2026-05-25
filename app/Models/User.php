<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     * These fields can be filled using mass assignment (e.g., User::create()).
     * Only include safe fields here - never add sensitive data like admin flags.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     * These fields are automatically hidden when converting the model to JSON/array.
     * This prevents sensitive data from being exposed in API responses.
     *
     * @var list<string>
     */
    protected $hidden = [
        // Password hash should never be exposed
        'password',
        // Remember token for "remember me" functionality should be hidden
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     * Casts automatically convert attributes to specific types when accessed.
     * This ensures proper data types and automatic hashing for passwords.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            // Cast email_verified_at to a Carbon datetime instance
            'email_verified_at' => 'datetime',
            // Automatically hash passwords when setting them
            // This ensures passwords are always hashed before saving to database
            'password' => 'hashed',
        ];
    }
}
