<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutUs', [App\Http\Controllers\AboutUsController::class, 'aboutUsView'])->name('about');
Route::get('/contactus', [App\Http\Controllers\ContactUsController::class, 'contactusView'])->name('contactus');
Route::get('/accommodations', [App\Http\Controllers\AccommodationsController::class, 'accommodationsView'])->name('accommodations');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboardView'])->name('dashboard');
    Route::get('/addAccommodations', [App\Http\Controllers\AccommodationsController::class, 'addAccommodationsView'])->name('addAccommodations');
    Route::post('/storeAccommodations', [App\Http\Controllers\AccommodationsController::class, 'store'])->name('storeAccommodations');
    Route::put('/updateAccommodations', [App\Http\Controllers\AccommodationsController::class, 'update'])->name('updateAccommodations');
    Route::get('/adminAccommodationsView', [App\Http\Controllers\AccommodationsController::class, 'adminAccommodationsView'])->name('adminAccommodationsView');
});

