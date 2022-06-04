<?php

use App\Models\Fiksi;
use App\Models\Horror;
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
    return view('welcome',[
        'title' => "welcome"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "name" => "Alfin Yusriansyah",
        "email" => "Yusrian001@gmail.com",
        "img" => "img/alfin.jpg"]);
});

Route::get('/fiksi', function () {
    return view('fiksi', [
        'title' => 'fiksi',
        'books' => Fiksi::all()

    ]);
});
    

Route::get('/fiksi/{slug}', function ($slug) {

    return view('fiksis',[
        "title" => "single post",
        "books_fiksi" => Fiksi::find($slug)
    ]);
});

Route::get('/horror', function(){
    return view('horror', [
        'title' => 'horror',
        'books_horror' => Horror::all()
    ]);
});
