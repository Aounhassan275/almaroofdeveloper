<?php

use Illuminate\Support\Facades\Artisan;
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

/******************ADMIN PANELS ROUTES****************/
Route::group(['prefix' => 'admin', 'as'=>'admin.','namespace' => 'Admin',], function () {
 
    /*******************LOGIN ROUTES*************/
    Route::view('login', 'admin.auth.index')->name('login');
    Route::post('login','AuthController@login');
     /******************MESSAGE ROUTES****************/
     Route::resource('message', 'MessageController');
    Route::group(['middleware' => 'auth:admin'], function () { 
    /*******************Logout ROUTES*************/       
    Route::get('logout','AuthController@logout')->name('logout');
    /*******************Dashoard ROUTES*************/
    Route::view('dashboard', 'admin.dashboard.index')->name('dashboard.index');
    /******************ADMIN ROUTES****************/
      Route::resource('admin', 'AdminController');    
    /*******************Profile ROUTES*************/
    Route::view('profile', 'admin.profile.index')->name('profile.index');
    Route::view('messages', 'admin.message.index')->name('messages.index');
    /******************Information ROUTES****************/
    Route::resource('information', 'InformationController');
    /******************Slider ROUTES****************/
    Route::resource('slider', 'SliderController');
    /******************SERVICE ROUTES****************/
    Route::resource('service', 'ServiceController');
});
});


/******************FRONTEND ROUTES****************/
Route::get('/', 'Front\PageController@home')->name('home');
Route::group(['middleware' => 'website'], function () { 
  Route::get('services','Front\PageController@services')->name('service.index');
  Route::get('service/{title}', 'Front\PageController@showServiceNext')->name('service.show');
  Route::view('contact_us', 'front.contact.index')->name('contact_us.index');
  Route::view('about_us', 'front.about.index')->name('about_us.index');
  Route::view('privacy_policy', 'front.privacy.index')->name('privacy_policy.index');
});

/******************FUNCTIONALITY ROUTES****************/
Route::get('/cd', function() {
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'DONE';
});

