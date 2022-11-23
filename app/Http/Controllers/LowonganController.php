<?php

namespace App\Http\Controllers;

use App\Models\lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        $table = lowongan::all();
        return view('lowongan.index', ['lowongan' => $table]);
    }

    public function detile($id)
    {
        $table = lowongan::find($id);
        return view('lowongan.detile', ['lowongan' => $table]);
    }
}
