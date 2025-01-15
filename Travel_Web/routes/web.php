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
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');


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
    Route::put('/admin/destinations/update/{id}', [App\Http\Controllers\DestinationController::class, 'update'])->name('destination.update');
    Route::delete('/admin/destinations/delete/{id}', [App\Http\Controllers\DestinationController::class, 'destroy'])->name('destination.destroy');
    Route::get('/adminFestival', [App\Http\Controllers\FestivalController::class, 'adminFestivalView'])->name('adminFestival');
    Route::post('/storeFestival', [App\Http\Controllers\FestivalController::class, 'store'])->name('storeFestival');
    Route::put('/admin/festival/update/{id}', [App\Http\Controllers\FestivalController::class, 'update'])->name('festival.update');
    Route::delete('/admin/festival/delete/{id}', [App\Http\Controllers\FestivalController::class, 'destroy'])->name('festival.destroy');
    Route::get('/addFestivals', [App\Http\Controllers\FestivalController::class, 'addFestivalView'])->name('addFestivals');
    Route::get('/adminDocumentaries', [App\Http\Controllers\DocumentariesController::class, 'adminDocumentariesView'])->name('addDocumentaries');
    Route::put('/admin/documentary/update/{id}',[App\Http\Controllers\DocumentariesController::class,'update'])->name('documentary.update');
    Route::delete('/admin/documentary/delete/{id}',[App\Http\Controllers\DocumentariesController::class,'destroy'])->name('documentary.destroy');
    Route::post('/storeDocumentary',[App\Http\Controllers\DocumentariesController::class,'store'])->name('storeDocumentaries');
    Route::get('/addDocumentaries',[App\Http\Controllers\DocumentariesController::class,'addDocumentariesView'])->name('addDocumentaries');
    Route::get('/addPlan',[App\Http\Controllers\PlanController::class,'addPlanView'])->name('addPlan');
    Route::get('/adminPlan', [App\Http\Controllers\PlanController::class, 'adminPlanView'])->name('adminPlan');
    Route::put('/admin/plans/update/{id}',[App\Http\Controllers\PlanController::class,'update'])->name('plan.update');
    Route::delete('/admin/plans/delete/{id}',[App\Http\Controllers\PlanController::class,'destroy'])->name('plan.destroy');
    Route::post('/storePlans',[App\Http\Controllers\PlanController::class,'store'])->name('storePlan');
});

