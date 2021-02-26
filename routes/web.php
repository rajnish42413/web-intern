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
    return view('links');
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

Route::get('/syllabus', function () {
    return view('syllabus');
});

Route::get('/exam-information', function () {
    return view('exam-information');
});
Route::get('/school-register', function () {
    return view('school-register');
});
Route::get('/individual-register', function () {
    return view('individual-register');
});
Route::get('/student-register', function () {
    return view('student-register');
});

Route::get('/user', function () {
    return view('user/dashboard');
});

Route::get('/user/2', function () {
    return view('user/dashboard-2');
});

Route::get('/purchases', function () {
    return view('user/purchase');
});

Route::get('/mock-tests', function () {
    return view('user/mock-tests');
});

Route::get('/mock-tests-2', function () {
    return view('user/mock-tests-2');
});
Route::get('/olympiad-exam', function () {
    return view('user/olympiad-exam');
});
Route::get('/olympiad-exam-answer', function () {
    return view('user/olympiad-exam-answer');
});



