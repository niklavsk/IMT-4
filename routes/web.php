<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/articles', function () {
    return view('articles');
})->name('articles');

Route::get('/articles/destinations', function () {
    return view('destinations');
})->name('destinations');

Route::get('/articles/guides', function () {
    return view('guides');
})->name('guides');

Route::get('/interesting-places-to-see-stray-cats', function () {
    return view('places');
})->name('interesting-places-to-see-stray-cats');

Route::get('/cat-cafes', function () {
    return view('cafes');
})->name('cat-cafes');

Route::get('/how-to-care-for-street-cats', function () {
    return view('care');
})->name('how-to-care-for-street-cats');

Route::get('/how-to-introduce-a-new-cat-to-other-cats-at-home', function () {
    return view('introduce');
})->name('how-to-introduce-a-new-cat-to-other-cats-at-home');

Route::get('/sitemap.xml', function() {
    return response()->view('sitemap')
        ->header('Content-Type', 'xml');
});
