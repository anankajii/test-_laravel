<?php

use App\Http\Controllers\Acara7Controller;
use App\Http\Controllers\ManagementUserControler;
use App\Http\Controllers\ManagementUserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Frontend\Acara7Controller as FrontendAcara7Controller;
use App\Http\Controllers\Backend\DashboardController as BackendDashboardController;
use App\Http\Controllers\Backend\PengalamanKerjaController as BackendPengalamanKerjaController;
use App\Http\Controllers\Backend\PendidikanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web" middleware group.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('foo', function () {
//     return 'Hello, World!';
// });

// Route::get('user/{id}', function ($id) {
//     return 'User ' . $id;
// });

// Route::get('posts/{post}/comments/{comment}', function ($post, $comment) {
//     return "Post: $post, Comment: $comment";
// });

//acara 5
//route::get('/user',[ManagementUserController::class, 'index']);
//Route::resource('users', ManagementUserController::class);
//acara6
//Route::get("/home", function (){
//    return view("home");
//});


//acara7
Route::resource('acara7', FrontendAcara7Controller::class);
// Route ke Controller (format modern Laravel)
//acara8
Route::resource('dashboard', BackendDashboardController::class);


Route::resource('pengalaman_kerja', BackendPengalamanKerjaController::class);
Route::resource('pendidikan', PendidikanController::class);
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::delete($uri, $callback);
// Route::patch($uri, $callback);


// Route::match(['get', 'post'], '/', function () {
//     //
// });
// Route::any('/', function () {
//     //
// });

// // <form method="POST" action="/profile">
// //     @csrf
// //     ...
// // </form>

// //Rediect Route
// route::redirect('/here', '/there');

// route::redirect('/here', '/there', 301);

// route::permanentRedirect('/here', '/there');

// //Route View
// route::view('/welcome', 'welcome');

// route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// //Parameter Optional
// Route::get('user/{name?}', function ($name = 'null') {
//     return $name;
// });

// Route::get('user/{name?}', function ($name = 'John') {
//     return $name;
// });

// //regular expression constraints
// Route::get('user/{name}', function ($name) {
//     //
// })->where('name', '[A-Za-z]+');

// Route::get('user/{id}', function ($id) {
//     //
// })->where('id', '[0-9]+');

// Route::get('user/{id}/{name}', function ($id, $name) {
//     //
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// //Global constraints
// /*
// * @return void
// */

// //Encoded forward slashes
// Route::get('search/{search}', function ($search) {
//     return $search;
// })->where('search', '.*');










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//session
Route::get('/session/create', [SessionController::class, 'create']);
Route::get('/session/show', [SessionController::class, 'show']);
Route::get('/session/delete', [SessionController::class, 'delete']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', function () {
    return view('formulir');
});

Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//route eror
Route::get('/cobacontroller/{nama?}', [CobaController::class, 'index']);

//acara19
Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
Route::post('/upload/proses', [UploadController::class, 'proses'])->name('upload.proses');
Route::post('/upload/resize', [UploadController::class, 'resize_upload'])->name('upload.resize');

//acara20
// dropzone gambar
Route::get('/dropzone', [UploadController::class, 'dropzone']);
Route::post('/dropzone/store', [UploadController::class, 'dropzone_store'])->name('dropzone.store');

Route::get('/pdf_upload', [UploadController::class, 'pdf_upload']);
Route::post('/pdf/store', [UploadController::class, 'pdf_store'])->name('pdf.store');
