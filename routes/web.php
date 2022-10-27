<?php

use Illuminate\Support\Facades\Route;
use Backend\UserController;
use Backend\ChangePasswordController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', UserController::class);
// クラスを指定する場合は[]で定義コントローラを括る
Route::post('users/{user}/change-password',
 [App\Http\Controllers\Backend\ChangePasswordController::class, 'change_password'])
->name('users.change.password');