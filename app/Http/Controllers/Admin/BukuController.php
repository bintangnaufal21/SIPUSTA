<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        // Kita akan arahkan ke view 'admin.buku.index'
        return view('admin.buku.index');
    }
}
