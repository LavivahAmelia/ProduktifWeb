<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class ManagementUserController extends Controller {

    public function index(){
        $nama = "Lavivah Amelia";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view('home', compact('nama','pelajaran'));
    }

    public function create() {
        return "...";
    }

    public function store(Request $request) {
        return " ";
    }

    public function show($id) {
        return " .$id";
    }

    public function edit($id) {
        return " .$id";
    }

    public function update(Request $request, $id) {
        return " .$id";
    }

    public function destroy($id) {
        return " .$id";
    }
}