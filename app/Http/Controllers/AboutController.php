<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{


    public function index()
    {
            $student = [
        'title' => 'About Page',
        'nama' => 'Adrik',
        'kelas' => '11 ppllg 3',
    ];
        return view('admin.about', [
            'title' => 'About Page',
            'nama' => 'Adrik',
            'kelas' => '11 ppllg 3',
            'student' => $student
        ]

        );
    }
}
