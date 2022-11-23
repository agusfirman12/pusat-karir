<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile.index');
    }

    public function dataPendidikan()
    {
        return view('profile.dataPendidikan');
    }

    public function gantiPassword()
    {
        return view('profile.gantiPassword');
    }

    public function dataPendukung()
    {
        return view('profile.dataPendukung');
    }
}
