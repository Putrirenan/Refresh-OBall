<?php

use App\Models\Video;
use App\Models\Favorite;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DeleteAccountController;
use App\Http\Controllers\ChangePasswordController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
    return view('welcome', [
        'video' => Video::paginate(3),
    ]);
});

Route::get('/allbooks', [VideoController::class, 'index']);


Route::get('categories/{category:name}', function (Category $category) {
    return view('books', [
        'video' => $category->video->load('category'),

    ]);
});

Route::post('/favorites/add', [FavoriteController::class, 'store']);
Route::delete('/favorites/delete', [FavoriteController::class, 'destroy']);

Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all(),
    ]);
});

Route::get('/admin', [AdminController::class, 'index']);


// Video Upload
Route::post('/admin/books', [VideoController::class, 'uploadVideo'])->name('videos.uploadedVideo');
Route::get('/admin/books/getVideo', [VideoController::class, 'getVideo']);
Route::resource('admin/books', VideoController::class);

Route::get('/admin/category/getCategory', [AdminCategoryController::class, 'getCategory']);
Route::resource('admin/category', AdminCategoryController::class);


Route::get('allbooks/user/books/{id}', [VideoUserController::class, 'show']);
Route::get('allbooks/user/books/download/{id}', [VideoUserController::class, 'download']);


//modals
Route::get('/modal', function () {
    return view('component.modal');
});

Route::get('/about', function () {
    return view('about');
});

//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/redirect', [LoginController::class, 'redirect']);
Route::get('/callback', [LoginController::class, 'callback']);
Route::get('/fbRedirect', [LoginController::class, 'fbRedirect']);
Route::get('/fb/callback', [LoginController::class, 'fbCallback']);
Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


//dashboard
Route::get('/dashboard', [UserController::class, 'index']);

// favorite
Route::get('/favorite', function () {
    return view('dashboard.favorite', [
        'favorite' => Favorite::latest()->paginate(4)
    ]);
})->name('favorite.index');


//profile
Route::get('/dashboard/profile/getUser', [ProfileController::class, 'getUser']);
Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');

//Setting
Route::get('/dashboard/setting/change-password', [ChangePasswordController::class, 'index']);
Route::post('/dashboard/setting/change-password', [ChangePasswordController::class, 'store'])->name('change.password');
Route::delete('/dashboard/setting/change-password/delete-account', [DeleteAccountController::class, 'destroy'])->name('delete-account');
