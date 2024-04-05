<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth'])->group(function () {
//Route::group(['middleware' => ['auth']], function () {
});
    Route::resource("/contacts", ContactController::class);

    Route::post('/login', 'LoginController@login')->name('login');
    Route::post('/logout', 'LoginController@logout');

