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


Route::get('/', function (){
    return view('home');
})->name('home');

Route::get('study',function (){
    return view('probka.stud');
})->name('study');

route::get('photoalbum', 'PhotoController@index')->name('album');
Route::get('article/{slug}', 'ArticlesController@getSingle')->name('single');
Route::get('articles', 'ArticlesController@getIndex');
Route::resource('pages', 'PagesController');
Route::resource('posts', 'PostsController');
Route::resource('comments', 'CommentsController');
Route::post('comments/{comment}/approve', 'CommentsController@approveComment')->name('comment.approve');
Route::post('comments/{comment}/unapprove', 'CommentsController@unapproveComment')->name('comment.unapprove');
Route::post('importCVS', 'CVScontroller@importCVS');
Route::get('importexport', 'CVScontroller@importexport')->name('importexport');
Route::get('index', 'PagesController@getIndex')->name('blog');
Route::get('domensview', 'DomensController@domensview')->name('domensview');
Route::post('domensview','DomensController@domenPost');


Auth::routes();