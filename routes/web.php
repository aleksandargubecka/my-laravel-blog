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

/**
 * Pages
 */

Route::get('/', "PagesController@getIndex");
Route::get('about', "PagesController@getAbout");
Route::get('contact', "PagesController@getContact");

/**
 * Blog
 */
Route::get('blog', [ 'uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('blog/{slug}', ['uses' => 'BlogController@getSingle', 'as' => 'blog.single'] )->where('slug', '[\w\d\-\_]+');

/**
 * Resources
 */
Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController', ['except' => 'create']);

/**
 * Auth
 */
Auth::routes();


/**
 * Admin
 */
Route::get('/blogadmin', ['uses' => 'AdminController@index', 'as' => 'blogadmin.index']);
