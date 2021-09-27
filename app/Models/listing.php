<?php

namespace App\Models;

use App\Models\Feed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'skills' => 'json',
        'budget' => 'json',
        'local_datetime' => 'datetime',
    ];

    public const STATUS_NEW = 'new';
    public const STATUS_ARCHIVED = 'archived';
    public const STATUS_DELETED = 'deleted';

    public function remove(): bool
    {
        return $this->update([
            'status' => Listing::STATUS_DELETED,
        ]);
    }

    public function archive(): bool
    {
        return $this->update([
            'status' => Listing::STATUS_ARCHIVED,
        ]);
    }

    public static function createFromParsedFeedListing(array $listing, Feed $feed): self
    {
        return $feed->listings()->firstOrcreate([
            'url' => $listing['url'],
        ], [
            'user_id' => $feed->user_id,
            'title' => $listing['title'],
            'content' => $listing['content'],
            'status' => Listing::STATUS_NEW,
            'local_datetime' => $listing['local_datetime'],
            'description' => $listing['description'],
            'budget' => $listing['budget'],
            'category' => $listing['category'],
            'country' => $listing['country'],
            'skills' => $listing['skills'],
        ]);
    }

    public function feed(): BelongsTo
    {
        return $this->belongsTo(Feed::class);
    }
}
