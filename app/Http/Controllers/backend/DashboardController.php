<?php

namespace App\Http\Controllers\backend;

use illuminate\Http\Request,
App\Http\Controllers\Controller;

class DashboardController extends Controller {
    public function index() {
        return view('backend.dashboard');
    }
}