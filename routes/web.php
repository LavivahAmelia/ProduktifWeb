<?php

use Illuminate\Support\Facades\Request;

$url = Request::path(); // atau Request::url() untuk full URL

// Ambil URL dari request
//$url = $_SERVER['REQUEST_URI'];

// Hilangkan karakter awal `/` jika ada
$url = ltrim($url, '/');

// Routing dasar
if ($url == '') {
    echo "Selamat datang di aplikasi PHP Routing!";
}

// Routing dengan route parameter (misal: /user/5)
elseif (preg_match('/^user\/([0-9]+)$/', $url, $matches)) {
    $userId = $matches[1];
    echo "Menampilkan data pengguna dengan ID: $userId";
}

// Routing dengan dua parameter (misal: /user/5/post/10)
elseif (preg_match('/^user\/([0-9]+)\/post\/([0-9]+)$/', $url, $matches)) {
    $userId = $matches[1];
    $postId = $matches[2];
    echo "Menampilkan post dengan ID: $postId dari user ID: $userId";
}

// Jika tidak ada rute yang cocok, tampilkan halaman 404
else {
    http_response_code(404);
    echo "Halaman tidak ditemukan!";
}


$url = route('profile');

return redirect()->route('profile');

Route::group(['namespace' => 'Frontend'], function(){
  Route::resource('home', 'HomeController');
});
//route::get('/user', 'ManajemenUserController@index');
Route::get('user/{id}/profile', function($id){

})->name('profile');

$url = route('profile', ['id' => 1]);

Route::middleware(['first', 'second'])->group(function(){
    Route::get('/', function(){

    });
    Route::get('user/profile', function () {

    });
});

Route::namespace('Admin')->group(function(){

});

Route::domain('{account}.myapp.com')->group(function(){
    Route::get('user/{id}', function ($account, $id){

    });
});

Route::prefix('admin')->group(function(){
    Route::get('users', function(){

    });
});

Route::name('admin.')->group(function(){
    Route::get('users', function(){

    })->name('users');
});

Route::resource('/user', 'ManagementUserController');
Route::get("/home", function(){
    return view("home");
});

Route::group(['namespace' => 'backend'], function() {
    Route::resource('dashboard', 'DashboardController');
});