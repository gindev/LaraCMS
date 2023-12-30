<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\UsersController;

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

Auth::routes();

Route::get('/admin', function() {
    return view('admin.index');
})->middleware('admin');

Route::resource('/admin/pages', PagesController::class, ['except' => [
    'show'
]]);

Route::resource('/admin/blog', BlogController::class, ['except' => [
    'show'
]]);

Route::resource('/admin/users', UsersController::class, ['except' => [
    'create', 'store', 'show'
]]);

Route::get('/blog', [BlogPostController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogPostController::class, 'view'])->name('blog.view');