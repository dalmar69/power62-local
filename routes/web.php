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
Route::get('/underconstruction', function(){
    return view('underconstruction');
})->name('underconstruction');

Route::get('/', function () {
    return view('index');
})->name('index'); 



Auth::routes();

Route::get('/profile-setup', function(){
    return view('profile.profile-setup');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/graphic-novel', function(){
    return view('graphic-novel');
});

Route::get('/contract', function(){
    return view('contract');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/shop', function(){
    return view('shop.welcome');
});


//I understand hardcoding this is obserd but im running short on time
//Will fix this later lol and sorry :(
Route::get('/videos/1', function() {
    return view('videos.view');
});
Route::get('/videos/2', function() {
    return view('videos.view');
});

//This will also be refactored at a later date
//Again I apologize.
//Route::get('/worlds/{id}', 'WorldController@show');
Route::get('/worlds/arango', function() {
    return view('worlds.arango');
});
Route::get('/worlds/bannoo', function() {
    return view('worlds.bannoo');
});
Route::get('/worlds/chupanzi', function() {
    return view('worlds.chupanzi');
});
Route::get('/worlds/devo', function() {
    return view('worlds.devo');
});
Route::get('/worlds/erax', function() {
    return view('worlds.erax');
});
Route::get('/worlds/fodo', function() {
    return view('worlds.fodo');
});