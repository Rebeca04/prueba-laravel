<?php

use App\Pastel;


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
    return (Pastel::get());
    // return view('welcome');
});


Route::get('pastelesVainilla', function(){
    $table = 'pasteles';
    // $pasteles = $table::get();
    return (Pastel::get()->where('sabor','vainilla'));
});
