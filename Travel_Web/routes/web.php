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
Route::get('/restaurants', [App\Http\Controllers\RestaurantsController::class, 'restaurantsView'])->name('restaurants');
Route::get('/plan', [App\Http\Controllers\PlanController::class, 'planView'])->name('plan');
Route::get('/festival', [App\Http\Controllers\FestivalController::class, 'festivalView'])->name('festival');
Route::get('/documentaries', [App\Http\Controllers\DocumentariesController::class, 'documentariesView'])->name('documentaries');
Route::get('/destination', [App\Http\Controllers\DestinationController::class, 'destinationView'])->name('destination');


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboardView'])->name('dashboard');
    Route::get('/addAccommodations', [App\Http\Controllers\AccommodationsController::class, 'addAccommodationsView'])->name('addAccommodations');
    Route::post('/storeAccommodations', [App\Http\Controllers\AccommodationsController::class, 'store'])->name('storeAccommodations');
    Route::put('/updateAccommodations/{id}', [App\Http\Controllers\AccommodationsController::class, 'update'])->name('updateAccommodations');
    Route::get('/adminAccommodationsView', [App\Http\Controllers\AccommodationsController::class, 'adminAccommodationsView'])->name('adminAccommodationsView');
    Route::delete('/accommodations/{id}', [App\Http\Controllers\AccommodationsController::class, 'destroy'])->name('accommodations.destroy');
    Route::get('/addDestination', [App\Http\Controllers\DestinationController::class, 'addDestinationView'])->name('addDestination');
    Route::get('/adminDestination', [App\Http\Controllers\DestinationController::class, 'adminDestinationView'])->name('adminDestination');
    Route::post('/storeDestination', [App\Http\Controllers\DestinationController::class, 'store'])->name('storeDestination');
});

