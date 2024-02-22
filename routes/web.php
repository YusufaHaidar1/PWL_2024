<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
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
Route::get('/', [HomeController::class, 'index']);

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function(){
    return 'World';
});

Route::get('/about', [AboutController::class, 'about']);

Route::get('/user/{name?}', function($name='John'){
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-' .$postId. ' Komentar ke-' .$commentId;
});

Route::get('/articles/{id}', [ArticleController::class, 'articles']);