<?php
// Ambil URL dari parameter query string
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '/';

// Load file routing
require_once '../routes/web.php';