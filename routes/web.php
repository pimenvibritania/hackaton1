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
    return view('welcome');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// Thread's Route
Route::get('/threads', 'Thread\ThreadController@index')->name('threads');
Route::post('/thread', 'Thread\ThreadController@create')->name('thread-new');
Route::get('/thread/{id}', 'Thread\ThreadController@find')->name('thread');
Route::put('/thread/{id}', 'Thread\ThreadController@update')->name('thread-update');
Route::delete('/thread/{id}', 'Thread\ThreadController@delete')->name('thread-delete');
// end Thread's Route

// Comment's Route
Route::get('/comments', 'Thread\CommentController@index')->name('threads');
Route::post('/comment', 'Thread\CommentController@create')->name('thread-new');
Route::get('/comment/{id}', 'Thread\CommentController@find')->name('thread');
Route::delete('/comment/{id}', 'Thread\CommentController@delete')->name('thread-delete');
// end Comment's Route
