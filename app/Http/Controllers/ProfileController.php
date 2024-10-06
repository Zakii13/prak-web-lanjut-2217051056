<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {

        $data = [
            'nama' => "Imam Muzaki",
            'kelas' => "D",
            'npm' => "2217051056",
        ];

        return view ('profile', $data);
    }
}
