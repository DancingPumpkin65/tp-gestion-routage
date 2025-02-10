<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function index() {
        return 'method index';
    }
    public function show() {
        return view('acceuil');
    }

    public function we() {
        return Hash::make('password123');

    }
}
