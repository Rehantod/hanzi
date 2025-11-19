<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StokLog;

class StokLogController extends Controller
{
     public function index()
    {
        $stokLogs = StokLog::all();
        return view('admin.stok_log.index', compact('stokLogs'));
    }
}
