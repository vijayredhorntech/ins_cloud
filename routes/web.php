<?php

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
    return view('index');
})->name('home');


//QuickBooks Hosting link pages
Route::get('/quickbooks-hosting', function () {
    return view('quickbooks-hosting');
})->name('quickbooks-hosting');

Route::get('/quickbooks-desktop', function () {
    return view('quickbooks-desktop');
})->name('quickbooks-desktop');

Route::get('/quickbooks-pro', function () {
    return view('quickbooks-pro');
})->name('quickbooks-pro');

Route::get('/quickbooks-premier', function () {
    return view('quickbooks-premier');
})->name('quickbooks-premier');

Route::get('/quickbooks-enterprise', function () {
    return view('quickbooks-enterprise');
})->name('quickbooks-enterprise');

Route::get('/quickbooks-pos', function () {
    return view('quickbooks-pos');
})->name('quickbooks-pos');

Route::get('/quickbooks-hosting-canada', function () {
    return view('quickbooks-hosting-canada');
})->name('quickbooks-hosting-canada');

//QuickBooks Hosting link pages ends here




//Sage Hosting link pages
Route::get('/sage-hosting', function () {
    return view('sage-hosting');
})->name('sage-hosting');

Route::get('/sage-50-hosting', function () {
    return view('sage-50-hosting');
})->name('sage-50-hosting');

Route::get('/sage-100-hosting', function () {
    return view('sage-100-hosting');
})->name('sage-100-hosting');

Route::get('/sage-300-hosting', function () {
    return view('sage-300-hosting');
})->name('sage-300-hosting');

Route::get('/sage-500-hosting', function () {
    return view('sage-500-hosting');
})->name('sage-500-hosting');
//Sage Hosting link pages ends here



//services link pages
Route::get('/lacerte-hosting', function () {
    return view('lacerte-hosting');
})->name('lacerte-hosting');

Route::get('/proSeries-hosting', function () {
    return view('proSeries-hosting');
})->name('proSeries-hosting');

Route::get('/cloud-server-hosting', function () {
    return view('cloud-server-hosting');
})->name('cloud-server-hosting');

Route::get('/drake-hosting', function () {
    return view('drake-hosting');
})->name('drake-hosting');

Route::get('/ultratax-hosting', function () {
    return view('ultratax-hosting');
})->name('ultratax-hosting');

Route::get('/act-hosting', function () {
    return view('act-hosting');
})->name('act-hosting');

Route::get('/atx-hosting', function () {
    return view('atx-hosting');
})->name('atx-hosting');

Route::get('/taxwise-hosting', function () {
    return view('taxwise-hosting');
})->name('taxwise-hosting');

Route::get('/quicken-hosting', function () {
    return view('quicken-hosting');
})->name('quicken-hosting');

Route::get('/myob-hosting', function () {
    return view('myob-hosting');
})->name('myob-hosting');

Route::get('/fishbowl-hosting', function () {
    return view('fishbowl-hosting');
})->name('fishbowl-hosting');

Route::get('/doc-it-hosting', function () {
    return view('doc-it-hosting');
})->name('doc-it-hosting');

//services link pages ends here


//pricing link pages starts here
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/dedicated-pricing', function () {
    return view('dedicated-pricing');
})->name('dedicated-pricing');

//pricing link pages ends here



//support link pages starts here
Route::get('/upload-data', function () {
    return view('upload-data');
})->name('upload-data');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

//support link pages ends here


//about-us link pages starts here
Route::get('/introduction', function () {
    return view('introduction');
})->name('introduction');

Route::get('/policy', function () {
    return view('policy');
})->name('policy');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

//about-us link pages ends here



Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/login', function () {
    return view('login');
})->name('login');
