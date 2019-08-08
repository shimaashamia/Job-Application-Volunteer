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

Route::get('/', function () {
    include public_path().'/views/idNumber.blade.php';
   // include public_path().'/views/idNumber.blade.php';


//   //  return view('../views/index.blade.php');
 });


//Route::resource('numbers','NumberController');
Route::post('numbers/search','NumberController@search');
//Route::post('numbers/search',['as' =>'drive.store','uses'=>'NumberController@search']);
Route::resource('data','DataController');
Route::resource('academic','AcademicController');
Route::resource('expertise','ExpertiseController');
Route::resource('training','TrainingController');


//Route::get('numbers','NumberController@create');


