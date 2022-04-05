<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::controller(PostController::class)->group(function() {
    Route::get('/posts', 'index');
    Route::get('/posts/{post:slug}','show');
});

Route::get('/categories', [CategoryController::class , 'index']);

Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login','authenticate');
    Route::post('/logout','logout');
});

Route::controller(RegisterController::class)->group(function() {
    Route::get('/register','index')->middleware('guest');
    Route::post('/register', 'store');
});

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard'
    ]);
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

