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

// One To One
Route::get('one-to-one/{country}', 'OneToOneController@oneToOne');
Route::get('one-to-one-inverse/{location}', 'OneToOneController@oneToOneInverse');
Route::get('one-to-one-insert', 'OneToOneController@oneToOneInsert');


// One To Many
Route::get('one-to-many/{country}', 'OneToManyController@oneToMany');
Route::get('many-to-one', 'OneToManyController@manyToOne');

Route::get('one-to-many-two', 'OneToManyController@oneToManyTwo');
Route::get('one-to-many-insert', 'OneToManyController@oneToManyInsert');
Route::get('one-to-many-insert-two', 'OneToManyController@oneToManyInsertTwo');

Route::get('one-to-many-through', 'OneToManyController@oneToManyThrough');


// Many To Many
Route::get('many-to-many', 'ManyToManyController@manyToMany');
Route::get('many-to-many-inverse', 'ManyToManyController@manyToManyInverse');

Route::get('many-to-many-insert', 'ManyToManyController@manyToManyInsert');


// Polymorphic
Route::get('polymorphics', 'PolymorphicController@polymorphic');
Route::get('polymorphics-insert', 'PolymorphicController@polymorphicInsert');
