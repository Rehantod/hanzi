<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManajemenAkunController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.manajemen_akun.index', compact('users'));
    }

    public function create()
    {
        return view('admin.manajemen_akun.create');
    }
}
