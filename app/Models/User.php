<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function feeds()
    {
        return $this->hasMany(Feed::class)->orderBy('title');
    }

    // public function listings()
    // {
    //     return $this->hasMany(Listing::class)->orderBy('title');
    // }

    public function avatarUrl()
    {
        return $this->profile_photo_path
            ? Storage::disk('avatars')->url($this->profile_photo_path)
            : "https://ui-avatars.com/api/?name={$this->name}&color=7F9CF5&background=EBF4FF";
    }
}
