<?php

use Illuminate\Support\Facades\Route;
use Backend\UserController;
use Backend\ChangePasswordController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', UserController::class);
// クラスを指定する場合は[]で定義コントローラを括る
Route::post('users/{user}/change-password',
 [App\Http\Controllers\Backend\ChangePasswordController::class, 'change_password'])
->name('users.change.password');