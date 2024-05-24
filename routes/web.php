<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index'])->name('post.index');

Route::get('/about', [AboutController::class, 'index']);

Route::get('/about', [ProductController::class, 'show_product']);

// post =================
Route::get('/posts', [PostController::class, 'index']);
// create
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
// edite
Route::get('/posts/{post}/edit', [PostController::class, 'edite'])->name('post.edite');
Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');
// <!-- delete -->
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.delete');

Route::get('/contacts', [ContactController::class, 'index']);

Route::get('/file', [UploadController::class, 'create']);

//Create images

Route::get('file', [App\Http\Controllers\UploadController::class, 'create'])->name('file');
Route::post('file-post', [App\Http\Controllers\UploadController::class, 'store'])->name('file.post');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//  auth / post ===================
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('post', [HomeController::class, 'post'])->middleware(['auth', 'admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';