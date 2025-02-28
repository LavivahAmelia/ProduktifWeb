<?php

// Routing dasar
if ($url == '/') {
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