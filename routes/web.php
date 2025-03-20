<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\Backend\DashboardController;

// Rute utama
Route::get('/', function () {
    return "Selamat datang di aplikasi PHP Routing!";
});

// Rute dengan parameter (misal: /user/5)
Route::get('user/{id}', function ($id) {
    return "Menampilkan data pengguna dengan ID: $id";
});

// Rute dengan dua parameter (misal: /user/5/post/10)
Route::get('user/{id}/post/{postId}', function ($id, $postId) {
    return "Menampilkan post dengan ID: $postId dari user ID: $id";
});

// Rute dengan nama profile
Route::get('user/{id}/profile', function ($id) {
    return "Menampilkan profil user dengan ID: $id";
})->name('profile');

// Redirect ke rute profile
Route::get('/go-to-profile', function () {
    return redirect()->route('profile', ['id' => 1]);
});

// Grouping dengan middleware
Route::middleware(['first', 'second'])->group(function () {
    Route::get('user/profile', function () {
        return "Ini adalah halaman profil dengan middleware.";
    });
});

// Namespace untuk rute admin
Route::namespace('App\Http\Controllers\Admin')->group(function () {
    // Tambahkan controller yang sesuai jika ada
});

// Subdomain routing
Route::domain('{account}.myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        return "Akun: $account, User ID: $id";
    });
});

// Prefix admin
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        return "Halaman admin users";
    });
});

// Naming group route
Route::name('admin.')->group(function () {
    Route::get('users', function () {
        return "Admin - Users Page";
    })->name('users');
});

// Resource Controller
Route::resource('user', ManagementUserController::class);
Route::resource('home', HomeController::class);
Route::resource('dashboard', DashboardController::class);

// Rute untuk home
Route::get('/home', function () {
    return view('home');
});
