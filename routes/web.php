<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\User\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
});

// user routes
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth'])->name('dashboard');
});

// authentication
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    // Route::get('/register', Register::class)->name('auth.register');


    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

    Route::get('/register', function () {
        return 'reg';
    })->name('register');
});


// test
Route::get('/parse', function () {
    $url = "https://www.upwork.com/ab/feed/jobs/rss?budget=10000-&sort=recency&job_type=fixed&user_location_match=1&paging=0%3B10&api_params=1&q=&securityToken=6611588803d794a62d5abc21631b8596cc1e3f4f80209f4bd0d23360bbb9198d54f92360f31a675fe9cd9d9dcd1d748526f5e8a06a9e18e27e9980e75ff3f1f2&userUid=424146853478907904&orgUid=424146853487296513";


    $f = FeedReader::read($url);

    foreach($f->get_items() as $listing) {


        dump($listing->get_title());
        dump($listing->get_link());
        // dump($f->get_items()[0]->get_content());
        // dump($f->get_items()[0]->get_local_date());
        // dump($f->get_items()[0]->get_link());
    }
    // echo $f->get_title();

// echo $f->get_items()[0]->get_title();
// echo '<br><br><br>';
// echo $f->get_items()[0]->get_content();
});