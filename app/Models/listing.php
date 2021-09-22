<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'local_datetime' => 'datetime',
        'skills' => 'json',
        'budget' => 'json',
    ];

    public const STATUS_NEW = 'new';
    public const STATUS_ARCHIVED = 'archived';
    public const STATUS_DELETED = 'archived';

    public function feed()
    {
        return $this->belongsTo(Feed::class);
    }
}
