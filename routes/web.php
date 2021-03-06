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

//Redireccion de rutas
Route::redirect('/', 'blog');


Auth::routes();


//WEB
Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('entradas/{slug}', 'Web\PageController@post')->name('post');
Route::get('categorias/{slug}', 'Web\PageController@category')->name('category');
Route::get('etiquetas/{slug}', 'Web\PageController@tag')->name('tag');




