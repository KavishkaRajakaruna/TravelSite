<?php

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


Route::view('/', 'internal.index');
Route::view('gallery', 'internal.gallery');
Route::view('packages', 'internal.packages');
Route::view('feedbacks' , 'internal.feedbacks');
Route::view('contact-us', 'internal.contact-us');
Route::view('about-us', 'internal.about-us');
Route::view('excurtion' , 'internal.excurtions');
Route::view('results', 'internal.results');
Route::post('contact-us' , 'ConatctForms@store');
Route::post('excurtion' , 'ConatctForms@storePackage');
Route::get('results', 'ConatctForms@show');

