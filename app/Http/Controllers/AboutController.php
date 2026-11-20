<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{


    public function index()
{
    return view('admin.about', [
        'title' => 'About Page',
        'nama'  => 'Adrik',
        'kelas' => '11 PPLG 3',
    ]);
}
}
