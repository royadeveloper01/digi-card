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
    return view('digicard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//category routes

Route::get('/categories', 'CardCategoryController@index');
Route::get('/categories/create', 'CardCategoryController@create');
Route::post('/categories', 'CardCategoryController@store')->name('saveCategory');
//Route::get('/categories/{id}', 'CardCategoryController')
Route::delete('/categories/{id}', 'CardCategoryController@destroy');


//Templates routes

Route::get('/templates', 'CardTemplateController@index');
Route::get('/templates/create', 'CardTemplateController@create')->name('createTemplate');
Route::get('/templates/{category_id}', 'CardTemplateController@cateTemplates');// all templates in a category
Route::post('/templates', 'CardTemplateController@store')->name('uploadTemplate');
Route::get('/templates/{id}/edit', 'CardTemplateController@edit');
Route::get('/templates/{id}', 'CardTemplateController@single');
Route::put('/templates/{id}', 'CardTemplateController@update');
Route::delete('/templates{id}', 'CardTemplateController@destroy');


//Complementary_cards Routes

Route::get('/compcards', 'ComplementaryCardController@index');
Route::get('/compcards/create', 'ComplementaryCardController@create');
Route::post('/compcards', 'ComplementaryCardController@store');
Route::get('/compcards/{category}', 'ComplementaryCardController@single');
Route::get('/compcards/recieved', 'ComplementaryCardController@recieved');
Route::delete('/compcards/{id}', 'ComplementaryCardController@destroy');


//Search Routes

Route::get('search', 'SearchController@index')->name('search');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');

Route::get('/rcards', 'SendCardController@received');

