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
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/ranking-criteria', function () {
    return view('ranking-criteria');
});

Route::get('/exam-information', function () {
    return view('exam-information');
});

Route::get('/individual-register', function () {
    return view('individual-register');
});

Route::get('/awards-and-recognition', function () {
    return view('awards-and-recognition');
});
Route::get('/benefits-for-schools', function () {
    return view('benefits-for-schools');
});



Route::get('syllabus', 'HomeController@index');

Route::get('syllabus/{standard}', 'HomeController@syllabus')->name('syllabus.class');
Route::get('register/student', 'HomeController@registerStudent');
Route::get('register/school', 'HomeController@registerSchool');
Route::get('register/school', 'HomeController@registerSchool');

Auth::routes();
Route::prefix('user')->name('user/')->group(static function() {
        Route::get('/',                                    'StudentController@index')->name('home');
        Route::get('/purchases',                           'UserController@purchase')->name('purchase');
        Route::get('/mock-tests',                          'UserController@mock')->name('mock');
        Route::get('/olympiad-exam',                       'UserController@exam')->name('exam');
        Route::get('/olympiad-exam-answer',                'UserController@answer')->name('answer');


        Route::get('/edit',                                'StudentController@edit')->name('edit');
        Route::post('/update',                             'StudentController@update')->name('update');
        Route::get('/profile-verification',                'StudentController@verification')->name('verification');
        Route::post('/update/id-proof',                    'StudentController@updateIdProof')->name('id-proof');
        Route::get('/id-proof/{image}',                    'StudentController@deleteImage')->name('id-proof-delete');
});
 
Route::get('packages',        'OrderController@packages');
Route::post('payment/callback', 'OrderController@paymentCallback');
Route::get('payment/status', 'OrderController@paymentStatus');

Route::prefix('order')->name('order/')->group(static function() {
        Route::post('/create',                            'OrderController@create')->name('create');
        Route::post('/{order}/payment',                      'OrderController@payment')->name('payment');
        Route::get('/{order}/checkout',                      'OrderController@checkout')->name('checkout');
});


