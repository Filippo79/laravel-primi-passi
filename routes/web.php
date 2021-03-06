<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ProductController@index')->name('home');

Route::get('/prodotti', function(){
    return view('prodotti');
})->name('prodotti');

Route::get('/prodotti/{id}', function($id){
    $data = [
        'id' => $id
    ];
    return view('prodotto' , $data);
})->name('singolo.prodotto');

Route::get('/contatti', function(){
    return view('contacts');
})->name('contatti');

Route::get('admin/prodotti', function(){
    return view('admin.prodotti');
})->name('admin.prodotti');
