<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(ProfileController::class)->group(function () {
    Route::get('/',  'index');
    Route::get('/about',  'about');
    Route::get('/services',  'services');
    Route::get('/services-details',  'services_details');
    Route::get('/portfolio',  'portfolio');
    Route::get('/portfolio-details',  'portfolio_details');
    Route::get('/blog',  'blog');
    Route::get('/blog-details',  'blog_details');
    Route::get('/contact',  'contact');
});



Route::resource('navigations', 'NavigationController');


