<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "",$kelas="", $npm="")
    {
        $data = [
            'nama' => 'MuhammadFaruqArkaan',
            'kelas' => 'C',
            'npm' => '2217051123'
        ];
        return view ('profile',$data);
    }
}
