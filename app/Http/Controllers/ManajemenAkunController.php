<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenAkunController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.manajemen_akun.index', compact('users'));
    }
}
