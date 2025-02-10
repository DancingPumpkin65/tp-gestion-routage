<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        return 'method index';
    }
    public function show() {
        return view('acceuil');
    }
}