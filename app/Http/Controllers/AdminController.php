<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        $user = Auth::user(); // atau dapatkan user dari model
        return view('admin.index', compact('user'));
    }
}