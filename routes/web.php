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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/reset-password', function () {
    return view('reset-password');
});

Route::get('/change-password', function () {
    return view('change-password');
});

Route::get('/all-booking', function () {
    return view('all-booking');
});

Route::get('/all-businesses', function () {
    return view('all-businesses');
});

Route::get('/add-business', function () {
    return view('add-business');
});

Route::get('/edit-business', function () {
    return view('edit-business');
});

Route::get('/business-detail', function () {
    return view('businessdetail');
});

Route::get('/all-customers', function () {
    return view('all-customers');
});

Route::get('/customer-detail', function () {
    return view('customer-detail');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::get('/subscriptions', function () {
    return view('subscriptions');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/notification-detail', function () {
    return view('notificationdetail');
});

Route::get('/send-mail', function () {
    return view('sendmail');
});