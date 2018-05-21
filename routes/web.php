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

Route:: group(['middleware' => 'auth'], function() {
    Route::get('/', 'PageController@index');
    Route::get('/home', 'PageController@index');
    Route::get('dashboard', 'PageController@index');
    
    Route::resource('stream', 'StreamController');
    
    Route::resource('subject', 'SubjectController');
    Route::get('subject/active/{subject}', 'SubjectController@activeStatus');
    Route::get('subject/inActive/{subject}', 'SubjectController@inActiveStatus');
    
    Route::resource('question', 'QuestionController');
    
    Route::resource('paper', 'PaperController');
    Route::get('paper/print/{paper}', 'PaperController@printPaper');
});

Auth::routes();
