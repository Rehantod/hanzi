<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokBarangController extends Controller
{
     public function index()
    {
        return view('admin.stok_barang.index');
    }
}
