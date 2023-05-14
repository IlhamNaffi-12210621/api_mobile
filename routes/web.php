<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', function () {
    return view('welcome');
});

route::namespace('App\Http\Controllers')->middleware('cek.apikey')->group(function(){
    route::get('login', 'PenggunaController@Login');
    route::delete('login', 'PenggunaController@Logout');

    route::group(['prefix'=>'pengguna', 'middleware' => ['cek.user']], function(){
        route::patch('/', 'PenggunaController@update');
        route::post('/', 'PenggunaController@simpan_photo');
        route::get('/', 'PenggunaController@photo');
    });

    route::prefix('warga')->middleware('cek.user')->group(function(){
        route::post('/', 'WargaController@store');
        route::patch('/{w}', 'WargaController@update');
        route::delete('/{w}', 'WargaController@delete');
        route::get('/{w}', 'WargaController@show');
    });
});