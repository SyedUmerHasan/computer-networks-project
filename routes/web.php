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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'ChatController@chatsystem')->name('chat');
    Route::get('/home', 'ChatController@chatsystem')->name('home');
    Route::post('/chat/updateUser', 'ChatController@updateUser')->name('updateUser');
    Route::post( '/chat/uploadAvatar', 'ChatController@uploadAvatar')->name( 'uploadAvatar');
    
});


// Route::get('/home', 'HomeController@index')->name('home');
