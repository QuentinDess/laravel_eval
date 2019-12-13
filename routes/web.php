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
    return view('home');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/showAnimals','AnimalController@show')->name('showAnimals');
ROUTE::group(['middleware'=>['auth']], function(){
    Route::get('/createAnimal', 'AnimalController@create')->name('createAnimal');
    ROUTE::post('/storeAnimal', 'AnimalController@store')->name('storeAnimal');
    ROUTE::post('/editAnimal/{id}', 'AnimalController@edit')->name('editAnimal');
    ROUTE::post('/updateAnimal/{id}', 'AnimalController@update')->name('updateAnimal');
    ROUTE::post('/deleteAnimal/{id}', 'AnimalController@destroy')->name('deleteAnimal');

    Route::get('/showRaces','RaceController@show')->name('showRaces');
    Route::get('/createRace', 'RaceController@create')->name('createRace');
    ROUTE::post('/storeRace', 'RaceController@store')->name('storeRace');
    ROUTE::post('/editRace/{id}', 'RaceController@edit')->name('editRace');
    ROUTE::post('/updateRace/{id}', 'RaceController@update')->name('updateRace');
    ROUTE::post('/deleteRace/{id}', 'RaceController@destroy')->name('deleteRace');
});