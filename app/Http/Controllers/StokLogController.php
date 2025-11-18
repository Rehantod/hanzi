<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokLogController extends Controller
{
     public function index()
    {
        return view('admin.stok_log.index');
    }
}
