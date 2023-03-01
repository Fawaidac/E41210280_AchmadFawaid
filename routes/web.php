<?php

use App\Http\Controllers\Backend\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\Frontend\HomeController;




Route::get('/', function () {
    return view('dashboard',[
        "title" => "dashboard"
    ]);
});


Route::get('/blog', function () {
    return view('blog',[
        "title" => "blog"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Achmad Fawaid",
        "nim" => "E41210280",
        "collage" => "Politeknik Negeri Jember",
    ]);
});
Route::get('/user',[RouteController::class,'index'])->name('user');

// Route::group(['namespace' => 'Frontend'], function(){
//     Route::resource('home', 'HomeController');
// });
// Route::namespace('Frontend')->group(function () {
//     Route::get('/home', 'HomeController@index');
// });
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/dashboard', function () {
    return view('backend.app');
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

