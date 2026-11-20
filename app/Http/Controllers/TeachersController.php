<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\Teachers;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teachers::with('subjects')->latest()->get();
        $subjects = Subjects::orderBy('name')->get();

    return view('admin.teacher.index', compact('teachers', 'subjects'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name'       => 'required|string|max:255',
        'niy'        => 'required|string|unique:teachers,niy',
        'subject_id' => 'required|exists:subjects,id|unique:teachers,subject_id',
        'start_date' => 'required|date',
    ], [
        'subject_id.unique' => 'Mata pelajaran ini sudah memiliki guru pengajar.',
        'niy.unique'        => 'NIY sudah digunakan.',
        'subject_id.required' => 'Mata pelajaran wajib dipilih.',
    ]);

    Teachers::create($validated);

    return redirect()->route('admin.teacher.index')
        ->with('success', 'Data guru berhasil ditambahkan.');
}
public function destroy(Teachers $teacher)
{
    $teacher->delete();

    return redirect()->route('admin.teacher.index')
        ->with('success', 'Data guru berhasil dihapus.');
}
}
