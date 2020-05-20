<?php

use Illuminate\Support\Facades\Auth;
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



//Route::get('/', function () {
//    return view('Posts.index');
//})->name('blog_home');

//Route::get('/', function () {
//    return view('home');
//})->name('blog_home');

// Route::get('/blogs', function () {
//     return view('Posts.blog_list');
// });



// Route::get('/blogs/create', function(){
//     return view('Posts.create');
// });

Auth::routes();



Route::get('/', 'PostAuthController@welcome')->name('post_welcome');
//Route::get('/login', 'PostAuthController@login')->name('post_login');

 Route::get('/profile', function(){

     // profile.blade.php 뷰를 반환한다.
     return view('profile');

 });

 // 이메일 관련 라우트
Route::post('/sendmail', 'ContactController@store');

Route::get('/blogs', 'PostsController@index');
Route::post('/blogs', 'PostsController@store');
Route::get('/blogs/create', 'PostsController@create');
Route::get('/blogs/{post}', 'PostsController@show')->name('post.show');
Route::get('/blogs/{post}/edit', 'PostsController@edit');
Route::put('/blogs/{post}', 'PostsController@update');
Route::delete('/blogs/{post}', 'PostsController@destroy');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');



Route::post('post/like/{post}', 'PostsController@like')->name('post.handleLike');
Route::get('post/{id}/islikedbyme', 'PostsController@isLikedByMe');


//Route::get('/home', 'HomeController@index')->name('home');
