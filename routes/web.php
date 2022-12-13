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

Route::get('page-content', function () {
    return view('/layouts/page-content');
});

Route::get('/','HomeController@index');
Route::get('/about','AboutController@index');
Route::get('/gallery','GalleryController@index');
Route::get('/menu','MenuController@index');
Route::get('/catering','CateringController@index');
Route::get('/menu-detail','MenuController@detail');
Route::get('/contact','ContactUsController@index');
Route::post('/contactus','ContactUsController@store')->name('contact.store');


// Reservation form
Route::post('reservation','HomeController@reservation_store')->name('reservation.store');


	Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>'auth'], function(){
		// Reservation 
		Route::get('reservation','ReservationController@index');
		Route::delete('reservation/{id}','ReservationController@delete');
		Route::get('contact','ContactController@index');
		Route::delete('contact/{id}','ContactController@delete');
		Route::get('/user_contact','Contact\FormController@contact_us');
		Route::delete('/contact_us/{id}','Contact\ContactUsController@delete');
		Route::resource('emails','EmailsController');

		Route::get('/dashboard','DashboardController@index');
		Route::get('/header-menu','MenuController@index');
		Route::resource('/manage-staff','StaffController');
		Route::resource('/product','ProductController');
		Route::get('/staff/{id}','StaffController@delete');
		
		Route::match(['get','post'],'/general-setting/logo','GeneralSettingController@logo');
		Route::match(['get','post'],'/general-setting/favicon','GeneralSettingController@favicon');
		Route::match(['get','post'],'/general-setting/header','GeneralSettingController@header');
		Route::match(['get','post'],'/general-setting/webstyle','GeneralSettingController@webstyle');

		Route::get('/general-setting/webstyle_status/{id}','GeneralSettingController@webstyle_status');
		
		Route::get('/general-setting/preloader','GeneralSettingController@preloader');
		Route::post('/general-setting/preloader/website','GeneralSettingController@web_preloader');
		Route::post('/general-setting/preloader/admin','GeneralSettingController@admin_preloader');

		Route::match(['get','post'],'/social-setting/links','SocialSettingController@links');
		Route::match(['get','post'],'/seotools/keywords','SeoToolsController@keywords');
		Route::match(['get','post'],'/social-setting/facebook','SocialSettingController@facebook');
		Route::get('/social-setting/facebook/status','SocialSettingController@facebook_status');
		Route::match(['get','post'],'/social-setting/google','SocialSettingController@google');
		Route::get('/social-setting/google/status','SocialSettingController@google_status');

	});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
