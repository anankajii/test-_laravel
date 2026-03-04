<?php

use App\Http\Controllers\Acara7Controller;
use App\Http\Controllers\ManagementUserControler;
use App\Http\Controllers\ManagementUserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\Acara7Controller as FrontendAcara7Controller;
use App\Http\Controllers\Backend\DashboardController as BackendDashboardController;

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
