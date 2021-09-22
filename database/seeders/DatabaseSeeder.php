<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Christopher James',
            'email' => 'chris@dytanium.com',
            'email_verified_at' => now(),
            'password' => Hash::make('alameda80'),
            'remember_token' => Str::Random(10),
        ]);

        // feeds
        $user->feeds()->create([
            'url' => 'https://www.upwork.com/ab/feed/jobs/rss?budget=1000-4999%2C5000-&contractor_tier=2%2C3&exclude_terms=wordpress&location=Australia%2CCanada%2CFinland%2CItaly%2CJapan%2CNetherlands%2CUnited+Kingdom%2CUnited+States&sort=recency&subcategory2_uid=531770282584862733&paging=0%3B10&api_params=1&q=NOT+wordpress&securityToken=6611588803d794a62d5abc21631b8596cc1e3f4f80209f4bd0d23360bbb9198d54f92360f31a675fe9cd9d9dcd1d748526f5e8a06a9e18e27e9980e75ff3f1f2&userUid=424146853478907904&orgUid=424146853487296513',
            'title' => 'Laravel',
            'description' => 'Good2',
            'color' => 'bg-red-400',
        ]);
        // $user->feeds()->create([
        //     'url' => 'test',
        //     'title' => 'PHP',
        //     'description' => 'Feed for PHP projects',
        //     'color' => 'bg-blue-400',
        // ]);
        // $user->feeds()->create([
        //     'url' => 'test',
        //     'title' => 'Fixed Large Budget',
        //     'description' => 'Feed for fixed large budget projects',
        //     'color' => 'bg-indigo-400',
        // ]);

        // listings
        Listing::create([
            'user_id' => 1,
            'feed_id' => 1,
            'title' => 'Full Stack Developer needed for SaaS conversion',
            'url' => 'test.com',
            'description' => 'I am looking for laravel developer to customise and add feature in my site',
            'content' => '',
            'budget' => ['type' => 'hourly', 'rate' => '50'],
            'status' => Listing::STATUS_NEW,
            'local_datetime' => '2021-09-09 01:23:21',
        ]);

        Listing::create([
            'user_id' => 1,
            'feed_id' => 1,
            'title' => 'Laravel developer needed to help with an existing project',
            'url' => 'test.com',
            'description' => 'We are looking for an individual that can jump in on an existing Laravel 8.x project and help our team complete some tickets in our backlog.',
            'content' => '',
            'budget' => ['type' => 'fixed', 'rate' => '5000'],
            'status' => Listing::STATUS_NEW,
            'local_datetime' => '2021-09-08 01:23:21',
        ]);

        Listing::create([
            'user_id' => 1,
            'feed_id' => 1,
            'title' => 'Build a website that is connected to a MySQL database',
            'url' => 'test.com',
            'description' => 'We are looking for someone to build a website for us. We need to also be given a MySQL database to an ftp interface to upload our new inventory. We know exactly what we want we just need someone to make the magic happen.',
            'content' => '',
            'budget' => ['type' => 'none', 'rate' => ''],
            'status' => Listing::STATUS_NEW,
            'local_datetime' => '2021-09-08 01:23:21',
        ]);
    }
}
