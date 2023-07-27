<?php

use App\Http\Controllers\Administrator;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(FrontEndController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('profile/list', 'list')->name('profile.list');
    Route::get('profile/visi', 'visi')->name('profile.visi');
    Route::get('profile/misi', 'misi')->name('profile.misi');
    Route::get('profile/sejarah', 'sejarah')->name('profile.sejarah');
    Route::get('pendidikan/list', 'listpendidikan')->name('pendidikan.list');
    Route::get('berita/list', 'listberita')->name('berita.list');
    Route::get('pengumuman/list', 'listpengumuman')->name('pengumuman.list');
    Route::get('berita/detail/{id}', 'detailberita')->name('berita.detail');
    Route::get('pengumuman/detail/{id}', 'detailpengumuman')->name('pengumuman.detail');
    Route::get('gallery/list', 'listgallery')->name('gallery.list');
});

Route::controller(UserController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses')->name('login.proses');
    Route::get('logout', 'logout')->name('logout');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['cekUserLogin']], function () {
        Route::controller(Administrator::class)->group(function () {
            Route::get('administrator', 'index')->name('administrator');
            Route::get('home', 'index')->name('home');
            Route::get('user', 'list')->name('user.list');
            Route::get('user/create', 'create')->name('user.create');
            Route::get('user/edit/{id}', 'edit')->name('user.edit');
            Route::post('user/update/{id}', 'update')->name('user.update');
            Route::post('user/destory/{id}', 'destory')->name('user.destory');
            Route::post('user/store', 'store')->name('user.store');
        });
        Route::resource('slider', SliderController::class);
        Route::resource('profile', ProfileController::class);
        Route::resource('setting', SettingController::class);
        Route::resource('pendidikan', PendidikanController::class);
        Route::resource('berita', BeritaController::class);
        Route::resource('pengumuman', PengumumanController::class);
        Route::resource('gallery', GalleryController::class);
    });
});