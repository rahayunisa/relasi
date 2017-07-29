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

Route::get('/orangtua', function() {
	$or = App\orangtua::all();
	foreach ($or as $data) {
		echo $data->namaibu." dengan ";
		echo $data->namaayah."   ";
		foreach ($data->anak as $key) {
			echo "<li> $key->nama </li><br>";
		}
	}
});

Route::get('/percobaan','MyController@index');

Route::get('/percobaan2','MyController@tampilan');

Route::get('/percobaan3','MyController@tampilmodel');
