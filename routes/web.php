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

// Route::get('/', function () {
//     return view('welcome');
// })

//login
Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin')->name('login');
Route::get('/register', 'AuthController@register');
Route::post('/postregister', 'AuthController@postregister')->name('register');

//LandingPage
Route::get('/', 'PagesController@home')->name('home');
Route::get('/homepages/data_bencana', 'PagesDataBencanaController@index')->name('homepages-data-bencana');
Route::get('/homepages/data_korban', 'PagesDataKorbanController@index')->name('homepages-data-korban');
Route::get('/homepages/data_kerusakan', 'PagesDataKerusakanController@index')->name('homepages-data-kerusakan');
Route::get('/homepages/data_posko', 'PagesDataPoskoController@index')->name('homepages-data-posko');
Route::get('/homepages/grafik_bencana', 'PagesGrafikController@index')->name('homepages-grafik-bencana');
Route::get('/homepages/home_berita', 'PagesBeritaController@index')->name('homepages-berita');
Route::get('/homepages/home_kegiatan', 'PagesKegiatanController@index')->name('homepages-kegiatan');

//home-detail-korban
Route::get('/homepages/data_detail_meninggal/{id}', 'PagesDataKorbanController@data_detail_meninggal')->name('homepages-detail-meninggal');
Route::get('/homepages/data_detail_luka/{id}', 'PagesDataKorbanController@data_detail_luka')->name('homepages-detail-luka');
Route::get('/homepages/data_detail_hilang/{id}', 'PagesDataKorbanController@data_detail_hilang')->name('homepages-detail-hilang');

//home-detail-kerusakan
Route::get('/homepages/data_kerusakan_berat/{id}', 'PagesDataKerusakanController@data_kerusakan_berat')->name('homepages-kerusakan-berat');
Route::get('/homepages/data_kerusakan_ringan/{id}', 'PagesDataKerusakanController@data_kerusakan_ringan')->name('homepages-kerusakan-ringan');
Route::get('/homepages/data_kerusakan_sedang/{id}', 'PagesDataKerusakanController@data_kerusakan_sedang')->name('homepages-kerusakan-sedang');



// lapor
Route::get('/homepages/lapor','PagesLaporController@index')->name('homepages-lapor-create');
Route::post('/homepages/lapor/create','PagesLaporController@create')->name('homepages-lapor');


Route::group(['middleware' => 'auth'], function (){
    Route::get('/layouts', 'AdminController@app');
    Route::get('/admins/data/berita', 'BeritaController@berita');
    Route::get('/admins/data/bencana', 'BencanaController@bencana');
    Route::get('/admins/data/korban', 'KorbanController@korban');
    Route::get('/admins/data/detail_korban', 'Detail_KorbanController@detail_korban');
    Route::get('/admins/data/kerusakan', 'KerusakanController@kerusakan');
    Route::get('/admins/data/kegiatan', 'KegiatanController@kegiatan');
    Route::get('/admins/data/posko', 'PoskoController@posko');
    Route::get('/admins/master/jenis', 'JenisController@jenis');
    Route::get('/admins/master/petugas', 'PetugasController@petugas');
});

    //Korban
    Route::post('/data/korban/create', 'KorbanController@create');
    Route::get('/admins/data/korban/edit/{id_korban}', 'KorbanController@edit')->name('edit-data-korban');
    Route::post('/admins/data/korban/update/{id_korban}', 'KorbanController@update');
    Route::post('/admins/data/korban/hapus/{id_korban}', 'KorbanController@hapus')->name('hapus-data-korban');
    Route::get('/admins/data/korban/detail/{id_korban}', 'KorbanController@detail')->name('detail-data-detail_korban');
    Route::get('/admins/data/korban/exportpdf', 'KorbanController@exportPdf');
    Route::post('/admins/data/korban/detail_korban/create/{id}', 'KorbanController@store')->name('tambah-detail-korban');
    Route::get('/admins/data/view-detail-korban/{id}', 'KorbanController@view_detail')->name('view-detail-korban');
    Route::get('/admins/data/view-detail-korban-luka/{id}', 'KorbanController@view_detail_luka')->name('view-detail-korban-luka');
    Route::get('/admins/data/view-detail-korban-kehilangan/{id}', 'KorbanController@view_detail_kehilangan')->name('view-detail-korban-kehilangan');
    Route::get('/admins/data/korban/exportpdf_meninggal/{id}', 'KorbanController@exportPdf_meninggal')->name('korban-meninggal-pdf');
    Route::get('/admins/data/korban/exportpdf_luka/{id}', 'KorbanController@exportPdf_luka')->name('korban-luka-pdf');
    Route::get('/admins/data/korban/exportpdf_hilang/{id}', 'KorbanController@exportPdf_hilang')->name('korban-hilang-pdf');


    //Bencana
    Route::post('/data/bencana/create', 'BencanaController@create');
    Route::get('/admins/data/bencana/edit/{id_bencana}', 'BencanaController@edit')->name('edit-data-bencana');
    Route::post('/admins/data/bencana/update/{id_bencana}', 'BencanaController@update');
    Route::post('/admins/data/korban/delete/{id_bencana}', 'BencanaController@delete')->name('hapus-data-bencana');
    Route::get('/admins/data/bencana/exportpdf', 'BencanaController@exportPdf');
    Route::post('admins/data/bencana/exportpdf-bencana', 'BencanaController@exportBencana')->name('print-bencana-masuk');

    //Jenis Bencana
    Route::post('/admins/master/jenis/create', 'JenisController@create');
    Route::get('/admins/master/jenis/edit/{id_jenis_bencana}', 'JenisController@edit')->name('edit-master-jenis_bencana');
    Route::post('/admins/master/jenis/update/{id_jenis_bencana}', 'JenisController@update');
    Route::post('/admins/master/jenis/hapus/{id_jenis_bencana}', 'JenisController@hapus')->name('hapus-master-jenis_bencana');

    //Kerusakan
    Route::post('/data/kerusakan/create', 'KerusakanController@create');
    Route::get('/admins/data/kerusakan/edit/{id_kerusakan}', 'KerusakanController@edit')->name('edit-data-kerusakan');
    Route::post('/admins/data/kerusakan/update/{id_kerusakan}', 'KerusakanController@update');
    Route::post('/admins/data/kerusakan/hapus/{id_kerusakan}', 'KerusakanController@hapus')->name('hapus-data-kerusakan');
    Route::get('/admins/data/kerusakan/exportpdf', 'KerusakanController@exportPdf')->name('data-kerusakan-pdf');
    Route::get('/admins/data/kerusakan/detail/{id_kerusakan}', 'KerusakanController@detail')->name('detail-data-detail_kerusakan');
    Route::post('/admins/data/kerusakan/detail_kerusakan/create/{id}', 'KerusakanController@store')->name('tambah-detail-kerusakan');
    Route::get('/admins/data/view-detail-kerusakan/{id}', 'KerusakanController@view_detail')->name('view-detail-kerusakan');
    Route::get('/admins/data/view-detail-kerusakan-berat/{id}', 'KerusakanController@view_detail_berat')->name('view-detail-berat');
    Route::get('/admins/data/view-detail-kerusakan-sedang/{id}', 'KerusakanController@view_detail_sedang')->name('view-detail-sedang');
    Route::get('/admins/data/view-detail-kerusakan-ringan/{id}', 'KerusakanController@view_detail_ringan')->name('view-detail-ringan');
    Route::get('/admins/data/kerusakan/exportpdf_berat/{id}', 'KerusakanController@exportPdf_berat')->name('kerusakan-berat-pdf');
    Route::get('/admins/data/keerusakan/exportpdf_sedang/{id}', 'KerusakanController@exportPdf_sedang')->name('kerusakan-sedang-pdf');
    Route::get('/admins/data/keerusakan/exportpdf_ringan/{id}', 'KerusakanController@exportPdf_ringan')->name('kerusakan-ringan-pdf');


    //Posko
    Route::post('/data/posko/create', 'PoskoController@create');
    Route::get('/admins/data/posko/edit/{id_posko}', 'PoskoController@edit')->name('edit-data-posko');
    Route::post('/admins/data/posko/update/{id_posko}', 'PoskoController@update');
    Route::post('/admins/data/posko/hapus/{id_posko}', 'PoskoController@hapus')->name('hapus-data-posko');
    Route::get('/admins/data/posko/exportpdf', 'PoskoController@exportPdf');

    //Berita
    Route::post('/data/berita/create', 'BeritaController@create');
    Route::get('/admins/data/berita/edit/{id_berita}', 'BeritaController@edit')->name('edit-data-berita');
    Route::post('/admins/data/berita/update/{id_berita}', 'BeritaController@update');
    Route::post('/admins/data/berita/hapus/{id_berita}', 'BeritaController@hapus')->name('hapus-data-berita');

    //Kegiatan
    Route::post('/data/kegiatan/create', 'KegiatanController@create');
    Route::get('/admins/data/kegiatan/edit/{id_kegiatan}', 'KegiatanController@edit')->name('edit-data-kegiatan');
    Route::post('/admins/data/kegiatan/update/{id_kegiatan}', 'KegiatanController@update');
    Route::post('/admins/data/kegiatan/hapus/{id_kegiatan}', 'KegiatanController@hapus')->name('hapus-data-kegiatan');

    //Detail_Korban
    Route::post('/data/detail_korban/create', 'Detail_KorbanController@create');
    Route::get('/admins/data/detail_korban/edit/{id_detail_korban}', 'Detail_KorbanController@edit')->name('edit-data-detail_korban');
    Route::post('/admins/data/detail_korban/update/{id_detail_korban}', 'Detail_KorbanController@update');
    Route::post('/admins/data/detail_korban/hapus/{id_detail_korban}', 'Detail_KorbanController@hapus')->name('hapus-data-detail_korbanDetail_KorbanController');

    //petugas
    Route::post('/admins/master/petugas/create', 'PetugasController@create');
    Route::get('/admins/master/petugas/edit/{id}', 'PetugasController@edit')->name('edit-master-data_admin');
    Route::post('/admins/master/petugas/update/{id}', 'PetugasController@update');
    Route::post('/admins/master/petugas/hapus/{id}', 'PetugasController@hapus')->name('hapus-master-data_admin');

