<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser, HasAvatar
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function canAccessFilament(): bool
    {
        return true;
    }

    public function getFilamentAvatarUrl(): ?string
    {
        if ($this->profile_pic) {
            return asset("storage/$this->profile_pic");
        }

        return null;
    }

    public function isMember(): bool
    {
        return $this->role == 'member';
    }

    public function isSecretary(): bool
    {
        return $this->role == 'secretary';
    }

    public function isPastor(): bool
    {
        return $this->role == 'pastor';
    }

    public function isAdmin(): bool
    {
        return $this->role == 'admin';
    }

}
