<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;

class SubjectsController extends Controller
{
    public function index()
{
    $subjects = Subjects::with('teacher')->latest()->get();
    return view('admin.subject.index', compact('subjects'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255|unique:subjects,name',
    ]);

    Subjects::create($validated);

    return redirect()->route('admin.subject.index')
        ->with('success', 'Mata pelajaran berhasil ditambahkan.');
}
public function destroy(Subjects $subject)
{
    if ($subject->teacher()->exists()) {
        return back()->withErrors(['delete' => 'Mapel tidak bisa dihapus karena masih diajar oleh guru.']);
    }

    $subject->delete();

    return redirect()->route('admin.subject.index')
        ->with('success', 'Mata pelajaran berhasil dihapus.');
}
}
