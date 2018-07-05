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

use Illuminate\Support\Facades\Storage;
use Intervention\Images\Facades\Image;


Route::get('/', 'IndexController@mapa')->name('map');
Route::get('/asociaciones', 'AsociacionController@index')->name('asociaciones');
Route::get('/anuncios','AnuncioController@index')->name('anuncios');
Route::get('/dondeadoptar', 'DondeAdoptar@index')->name('adoptar');
Route::get('/voluntariado', 'AnuncioVoluntariadoController@index')->name('voluntariado');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/anuncios', 'AnuncioController@store');

Route::post('/voluntariado', 'AnuncioVoluntariadoController@store');

Route::get('/images/{path}/{imagen}', function ($path, $imagen){
		// Lo siguiente devuelve el Path absoluto de "Storage"
		$imageFilePath= '../storage/app/anuncios/'.$imagen;
		if(File::exists($imageFilePath)) {
			return Image::make($imageFilePath)->response();
		}
});

Route::get('/noWeb', 'noWebController@index')->name('noWeb');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('adoptar/{id_animal}/{id_asociacion}', 'DondeAdoptar@adoptar');
Route::post('contrato/{id_asociacion}/{id_animal}', 'DondeAdoptar@contrato');