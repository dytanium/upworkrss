<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feed extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'checked_at' => 'datetime',
    ];

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function lastChecked()
    {
        if (! $this->checked_at) {
            return 'Never';
        }

        return $this->checked_at->diffForHumans();
    }

    public static function colors()
    {
        return [
            'bg-black' => 'Black',
            'bg-gray-400' => 'Gray',
            'bg-gray-900' => 'Dark Gray',
            'bg-red-400' => 'Light Red',
            'bg-red-900' => 'Dark Red',
            'bg-yellow-200' => 'Light Yellow',
            'bg-yellow-900' => 'Amber',
            'bg-yellow-500' => 'Orange',
            'bg-green-400' => 'Light Green',
            'bg-green-900' => 'Dark Green',
            'bg-blue-400' => 'Light Blue',
            'bg-blue-900' => 'Dark Blue',
            'bg-indigo-400' => 'Light Indigo',
            'bg-indigo-900' => 'Dark Indigo',
            'bg-purple-400' => 'Light Purple',
            'bg-purple-900' => 'Dark Purple',
            'bg-pink-400' => 'Light Pink',
            'bg-pink-900' => 'Dark Pink',
        ];
    }
}
