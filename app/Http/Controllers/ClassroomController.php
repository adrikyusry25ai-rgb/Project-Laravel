<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
{
    $classrooms = Classroom::withCount('students')->latest()->get();
    return view('admin.classroom.index', compact('classrooms'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name'  => 'required|string|max:255|unique:classrooms,name',
        'major' => 'required|in:PPLG,DKV,ANIMASI',
    ]);

    Classroom::create($validated);

    return redirect()->route('admin.classroom.index')
        ->with('success', 'Kelas berhasil ditambahkan.');
}
}


