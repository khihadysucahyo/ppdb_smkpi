<?php

Auth::routes();
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PublicController@index');
Route::get('list_peserta', 'PublicController@list_peserta');
Route::get('profile', 'PublicController@profile');
Route::get('info_ppdb', 'PublicController@info_ppdb');
Route::get('info_ppdb/{id}', 'PublicController@info_detail');

Route::group(['middleware'=>'admin'], function(){
    Route::get('cetaklap', 'AdminController@cetakLap');

    Route::get('admin/user', 'adminController@admin_user');
    Route::get('admin/tambah_user', 'adminController@tambah_admin_user');
    Route::post('admin/tambah_user', 'adminController@store_admin_user');

    Route::get('admin', 'adminController@index');
    Route::get('peserta', 'adminController@peserta');
    Route::get('peserta/cari', 'adminController@cari_peserta');
    Route::get('peserta/filter', 'adminController@filter');
    Route::get('cetakform/{id}', 'AdminController@cetakForm');
    Route::get('hapus/{id}', 'AdminController@hapus');
    Route::get('edit/{id}', 'AdminController@edit');
    Route::post('edit/{id}', 'AdminController@update');
    Route::post('upload/{id}', 'AdminController@upload');

    Route::post('peserta/destroy', 'adminController@multi_destroy');
    Route::post('peserta/update_verifikasi/{id}', 'adminController@multi_verifikasi');
    Route::post('peserta/update_diterima/{id}', 'adminController@multi_diterima');

    // laporan
    Route::post('laporan/data_pendaftar', 'LaporanController@lap_data_pendaftar');
    Route::post('laporan/pendaftar_pertahun', 'LaporanController@lap_pendaftar_pertahun');
    Route::post('laporan/statistik', 'LaporanController@lap_statistik');
    Route::post('laporan/data_kelulusan', 'LaporanController@lap_data_kelulusan');


    Route::get('info', 'InfoController@index');
    Route::post('info', 'InfoController@store');
    Route::get('info/create', 'InfoController@create');
    Route::get('info/{id}', 'InfoController@show');
    // Route::delete('/info/{id}', 'InfoController@destroy');
    Route::get('hapusinfo/{id}', 'InfoController@destroy');
    Route::put('info/{id}', 'InfoController@update');
    Route::get('cetakinfo/{id}', 'InfoController@cetakInfo');

    Route::get('laporan', 'LaporanController@index');
    Route::get('pesan_admin', 'AdminController@pesan');
    Route::post('pesan_admin', 'AdminController@send');
    Route::get('pesan_admin/{id}', 'AdminController@pesan_detail');
    Route::post('pesan_admin/{id}', 'AdminController@reply');


    Route::get('tentang_sekolah', 'SekolahController@tentang_sekolah');
    Route::post('tentang_sekolah', 'SekolahController@tentang_sekolah_store');
    Route::get('visi_misi', 'SekolahController@visi_misi');
    Route::post('visi_misi', 'SekolahController@visi_misi_store');
    Route::get('lokasi', 'SekolahController@lokasi');
    Route::post('lokasi', 'SekolahController@lokasi_store');
    Route::get('pengaturan', 'SekolahController@pengaturan');
    Route::post('pengaturan', 'SekolahController@pengaturan_update');
    Route::post('pengaturan_telegram', 'SekolahController@pengaturan_update_telegram');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('dashboard', 'HomeController@index');
    Route::get('biodata_saya', 'UserController@biodata');
    // Route::post('/biodata_saya', 'UserController@simpan')->name('simpanData');
    Route::post('biodata_saya', 'UserController@simpan');
    Route::post('upload', 'UserController@upload');
    // Route::get('/download/{file}', 'UserController@download');
    Route::get('cetakform', 'UserController@cetakForm');

    Route::get('pesan', 'PesanController@index');
    Route::post('pesan', 'PesanController@send');
    Route::get('pesan/{id}', 'PesanController@detail');
    Route::post('pesan/{id}', 'PesanController@reply');
    Route::get('get-updates','TelegramController@getUpdates');
    Route::get('send','TelegramController@getSendMessage');
    Route::post('send','TelegramController@postSendMessage');

    Route::get('hasil_seleksi','AdminController@hasil_seleksi');
});
