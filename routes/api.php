<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommantaireController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('me', 'me');
});

Route::get('category', [CategoryController::class, 'index']);
Route::post('category', [CategoryController::class, 'store']);
Route::get('category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('category/{id}/edit', [CategoryController::class, 'update']);
Route::delete('category/{id}/delete', [CategoryController::class, 'delete']);
Route::get('FilterByCategory/{category}',[CategoryController::class,'FilterByCategory']);


Route::get('/index' , [ArticleController::class , "index"]);
Route::post('/addArticle' , [ArticleController::class , "addArticle"]);
Route::get('/show/{id}' , [ArticleController::class , "showArticle"]);
Route::put('/update/{id}' , [ArticleController::class , "updateArticle"]);
Route::delete('/delete/{id}' , [ArticleController::class , "deleteArticle"]);


Route::get('tags' , [TagsController::class , "index"]);
Route::post('addTags' , [TagsController::class , "store"]);
Route::get('tags/{id}/edit', [TagsController::class, 'edit']);
Route::put('tags/{id}/edit', [TagsController::class, 'update']);
Route::delete('tags/{id}/delete', [TagsController::class, 'delete']);


Route::controller(CommantaireController::class)->group(function(){
    Route::post('article/{id}/createComments','store');
    Route::get('article/{idArticle}/fetshComments','index');
    Route::delete('article/{id}/deleteComments/{idComment}','destroy');
    Route::post('createComments','store');
});
