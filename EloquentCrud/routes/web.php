<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
    return view('welcome');
});

Route::get('/articles',[ArticleController::class,'getArticles'])->name('all.articles');
Route::get('/add-article',[ArticleController::class,'addArticle'])->name('add.article');
Route::post('/articles',[ArticleController::class,'storeArticle'])->name('store.article');
Route::get('/articles/{article}',[ArticleController::class,'showArticle'])->name('show.article');
Route::get('/edit-article/{article}',[ArticleController::class,'editArticle'])->name('edit.article');
Route::post('/update-article/{article}',[ArticleController::class,'updateArticle'])->name('update.article');
Route::get('/delete-article/{article}',[ArticleController::class,'deleteArticle'])->name('delete.article');

