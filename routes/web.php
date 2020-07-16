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

// Login
Route::get('/', 'Auth\LoginController@showLoginForm');

// Auth::routes(['register' => false]);

// Route Group
Route::group(['middleware' => ['auth', 'xss']], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    //Golongan
    Route::get('/golongan', 'GolonganController@index')->name('golongan');
    Route::get('/golongan/create', 'GolonganController@create')->name('golongan.create');
    Route::post('/golongan/store', 'GolonganController@store')->name('golongan.store');
    Route::get('/golongan/edit/{id}', 'GolonganController@edit')->name('golongan.edit');
    Route::get('/golongan/delete/{id}', 'GolonganController@destroy')->name('golongan.delete');
    Route::post('/golongan/update/{id}', 'GolonganController@update')->name('golongan.update');

    // Status
    Route::get('/status', 'StatusController@index')->name('status');
    Route::get('/status/create', 'StatusController@create')->name('status.create');
    Route::post('/status/store', 'StatusController@store')->name('status.store');
    Route::get('/status/edit/{id}', 'StatusController@edit')->name('status.edit');
    Route::get('/status/delete/{id}', 'StatusController@destroy')->name('status.delete');
    Route::post('/status/update/{id}', 'StatusController@update')->name('status.update');

    // Unit Kerja
    Route::get('/unitkerja', 'UnitkerjaController@index')->name('unitkerja');
    Route::get('/unitkerja/create', 'UnitkerjaController@create')->name('unitkerja.create');
    Route::post('/unitkerja/store', 'UnitkerjaController@store')->name('unitkerja.store');
    Route::get('/unitkerja/edit/{id}', 'UnitkerjaController@edit')->name('unitkerja.edit');
    Route::get('/unitkerja/delete/{id}', 'UnitkerjaController@destroy')->name('unitkerja.delete');
    Route::post('/unitkerja/update/{id}', 'UnitkerjaController@update')->name('unitkerja.update');

    // Karyawan
    Route::get('/karyawan', 'KaryawanController@index')->name('karyawan');
    Route::get('/karyawan/create', 'KaryawanController@create')->name('karyawan.create');
    Route::post('/karyawan/store', 'KaryawanController@store')->name('karyawan.store');
    Route::get('/karyawan/edit/{id}', 'KaryawanController@edit')->name('karyawan.edit');
    Route::get('/karyawan/delete/{id}', 'KaryawanController@destroy')->name('karyawan.delete');
    Route::post('/karyawan/update/{id}', 'KaryawanController@update')->name('karyawan.update');

    // Gaji
    Route::get('/gaji', 'GajiController@index')->name('gaji');
    Route::get('/gaji/create', 'GajiController@create')->name('gaji.create');
    Route::post('/gaji/store', 'GajiController@store')->name('gaji.store');
    Route::get('/gaji/edit/{id}', 'GajiController@edit')->name('gaji.edit');
    Route::get('/gaji/delete/{id}', 'GajiController@destroy')->name('gaji.delete');
    Route::post('/gaji/update/{id}', 'GajiController@update')->name('gaji.update');

    // Struk Gaji
    Route::get('/cetak_struk', 'StrukController@index')->name('struk');
});



Auth::routes();

Route::post('/login/validate', 'Auth\LoginController@validate_api');
