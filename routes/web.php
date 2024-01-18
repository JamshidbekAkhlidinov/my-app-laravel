<?php

use App\Http\Controllers\PostCategoryController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/post-category', [PostCategoryController::class, 'index'])
    ->name('post.category.index');

Route::get('/admin/post-category/create', [PostCategoryController::class, 'create'])
    ->name('post.category.create');

Route::post('/admin/post-category/create', [PostCategoryController::class, 'create'])
    ->name('post.category.create');

Route::get('/admin/post-category/update/{category}', [PostCategoryController::class, 'update'])
    ->name('post.category.update');


Route::post('/admin/post-category/update', [PostCategoryController::class, 'updateReq'])
    ->name('post.category.update.request');
Route::post('/admin/post-category/delete/{category}', [PostCategoryController::class, 'delete'])
    ->name('post.category.delete');

