<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;

class SubjectsController extends Controller
{
    public function index()
    {
        $subjects = Subjects::all();
        return view('admin.subjects', compact('subjects'));
    }
}
