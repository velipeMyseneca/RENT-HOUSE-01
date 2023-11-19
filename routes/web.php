<?php

use App\Http\Controllers\listing_Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\schedListing_Controller;
use App\Http\Controllers\userListing_Controller;
use App\Models\listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $listings = listing::orderBy('price')->take(8)->get();;
    return view('landingpage',['listings'=>$listings]);
    // return view('landingpage');
});



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    


    // /user info
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //admin manage listing
    Route::get('/listing', [listing_Controller::class, 'index'])->name('listing.index');

    Route::get('/listing/create', [listing_Controller::class, 'create'])->name('listing.create');
    Route::post('/listing', [listing_Controller::class, 'store'])->name('listing.store');

    Route::get('/listing/{listing}/edit', [listing_Controller::class, 'edit'])->name('listing.edit');
    Route::put('/listing/{listing}/update', [listing_Controller::class, 'update'])->name('listing.update');

    Route::delete('/listing/{listing}/destroy', [listing_Controller::class, 'destroy'])->name('listing.destroy');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/for-rent', [userListing_Controller::class, 'index'])->name('userlisting.index');
Route::get('/for-rent/detail', [userListing_Controller::class, 'indexDetailed'])->name('userlisting.indexDetailed');

Route::post('/for-rent/detail', [schedListing_Controller::class, 'store'])->name('schedListing.store');



require __DIR__.'/auth.php';