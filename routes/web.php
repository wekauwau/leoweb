<?php

use App\Models\Division;
use App\Models\Executive;
use Illuminate\Support\Facades\Route;

Route::get('images/{name}')
    ->name('image');

Route::view('/', 'dashboard')
    ->name('dashboard');

Route::view('about', 'about')
    ->name('about');

Route::get('structure', function () {
    $executives = Executive::with('position', 'position.member')->get();
    $divisions = Division::with('leader', 'position', 'position.member')->get();

    return view('structure', compact('executives', 'divisions'));
})->name('structure');

Route::view('activities', 'activities')
    ->name('activities');

Route::view('insights', 'insights')
    ->name('insights');

Route::view('news', 'news')
    ->name('news');

Route::get('post/{id}', function (string $id) {
    return view('post', compact('id'));
})->name('post');

Route::middleware([
    'auth',
])->group(function () {
    Route::view('profile', 'profile')
        ->name('profile');
});

require __DIR__.'/auth.php';
