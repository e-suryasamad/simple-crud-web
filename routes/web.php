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

/* 
Route::get('home', function () {
    return view('home');
});
*/
 Route::get('/welcome', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
	Auth::routes();
	Route::get('/','artikelCont@viewArtikel')->name('artikel');
    Route::prefix('artikel')->group(function () {
    	Route::get('/','artikelCont@viewArtikel');
		Route::get('msg/{msg}','artikelCont@viewArtikelWithMsg');
		Route::get('viewTambahArtikel','artikelCont@viewTambahArtikel');
		Route::get('viewDetailArtikel/{id}','artikelCont@viewDetailArtikel');
		Route::get('viewEditArtikel/{id}','artikelCont@viewEditArtikel');
		Route::get('viewDeleteArtikel/{id}','artikelCont@viewDeleteArtikel');
		Route::post('prosesTambahArtikel','artikelCont@prosesTambahArtikel');
		Route::post('prosesEditArtikel','artikelCont@prosesEditArtikel');
		Route::get('prosesDeleteArtikel/{id}','artikelCont@prosesDeleteArtikel');
    });

    Route::prefix('pemakalah')->group(function () {
    	Route::get('/','pemakalahCont@viewPemakalah')->name('pemakalah');
		Route::get('msg/{msg}','pemakalahCont@viewPemakalahWithMsg');
		Route::get('viewDetailPemakalah/{id}','pemakalahCont@viewDetailPemakalah');
		Route::post('prosesKonfirmasiPemakalah','pemakalahCont@prosesKonfirmasiPemakalah');
    });

    Route::prefix('peserta')->group(function () {
    	Route::get('/','pesertaCont@viewPeserta')->name('pemakalah');
		Route::get('msg/{msg}','pesertaCont@viewPesertaWithMsg');
		Route::get('viewDetailPeserta/{id}','pesertaCont@viewDetailPeserta');
		Route::post('prosesKonfirmasiPeserta','pesertaCont@prosesKonfirmasiPeserta');
    });
});


// Route::get('/','anggotaCont@viewBeranda');
// //Route::get('/anggota/artikel','anggotaCont@viewArtikel');
// Route::prefix('anggota')->group(function () {
// 	Route::get('/','anggotaCont@viewBeranda');
// 	Route::get('/artikel','anggotaCont@viewArtikel');
// 	Route::get('/artikel/msg/{msg}','anggotaCont@viewArtikelWithMsg');
// 	Route::post('/artikel/cari','anggotaCont@prosesCari');
// 	Route::get('/artikel/konfirmasi/{id}','anggotaCont@viewKonfirmasi');
// 	Route::post('/artikel/prosesKonfirmasi','anggotaCont@prosesKonfirmasi');
// 	Route::get('/peserta','pesertaCont@viewPeserta');
// 	Route::get('/peserta/daftar','anggotaCont@viewDaftar');
 
// });



//Route::get('/admin', 'HomeController@index')->name('home');
