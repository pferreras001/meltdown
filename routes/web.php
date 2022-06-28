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


///////// REDIRECT TO HTTPS

/*if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}*/

////////////////



Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', 'PagesController@home')->name('home');

Route::get('/merch/', 'PagesController@merch')->name('merch');

Route::get('/videos/', 'PagesController@videos')->name('videos');

Route::get('/music/', 'PagesController@music')->name('music');

Route::get('/tour/', 'PagesController@tour')->name('tour');

Route::get('/history/', 'PagesController@history')->name('history');

Route::get('/us/', 'PagesController@us')->name('us');

Route::get('/contact/', 'PagesController@contact')->name('contact');

Route::get('/media/', 'PagesController@media')->name('media');

Route::post('/subscription', 'PagesController@createSubscription')->name('subscriptions.create');
