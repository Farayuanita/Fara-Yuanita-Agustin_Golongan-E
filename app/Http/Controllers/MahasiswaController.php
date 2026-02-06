<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mhs = [
            'nama' => 'Fara Yuanita Agustin',
            'nim'  => 'E41242046',
            'golongan' => 'E',
            'jurusan' => 'Teknologi Informasi',
            'prodi' => 'Teknik Informatika'
        ];

        return view('biodata', compact('mhs'));
    }
}
