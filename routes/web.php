<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', Home::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Route::get('/profile/{user_id?}' , App\Http\Livewire\Profile::class)->name('profile');
Route::get('/hostel-view-page/{slug}/{message?}' , App\Http\Livewire\Hostel\HostelViewPage::class)->name('hostel-view-page');

