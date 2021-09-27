<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use App\Actions\FetchFeedListings;

class FetchFeedListingsForUser extends Command
{
    protected $signature = 'feed:user {user}';

    protected $description = 'Fetch new listings for a user.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $user = User::findOrFail($this->argument('user'));

        $this->info("Fetching new listings for: {$user->name}...");

        foreach ($user->feeds as $feed) {
            $feed->fetchListings();
        }

        $this->info("All done!");

        return 0;
    }
}
