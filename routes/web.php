<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/salam', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return 'NIM: 123456789 - Nama: Bagas';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $comment) {
//     return 'Pos ke- ' . $postId . ' Komentar ke- ' . $comment;
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman Artikel dengan ID {$id}";
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya ' .  $name;

// });
// Route:: get('/hello', [WelcomecController::class,'hello']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return 'Selamat Datang di Halaman Utama';
// });
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::resource('photos', PhotoController::class);
Route::get('/specialMahasiswa', function () {
    return 'Special Mahasiswa';
});
Route::get('/specialUrl', function () {
    return 'Special URL';
});
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
