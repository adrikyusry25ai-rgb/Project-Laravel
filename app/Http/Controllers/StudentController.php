<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = [
    [
        'nis' => '10001',
        'name' => 'Ahmad Adrik Yusry',
        'classroom' => 'XI RPL 3',
    ],
    [
        'nis' => '10002',
        'name' => 'Reynanda Putra Sarva Ferdinand',
        'classroom' => 'XI RPL 3',
    ],
    [
        'nis' => '10003',
        'name' => 'Cahyo Ramadhan',
        'classroom' => 'XI RPL 2',
    ],
    [
        'nis' => '10004',
        'name' => 'Dimas Pratama',
        'classroom' => 'XI RPL 2',
    ],
    [
        'nis' => '10005',
        'name' => 'Eko Saputra',
        'classroom' => 'XI RPL 1',
    ],
    [
        'nis' => '10006',
        'name' => 'Fajar Nugroho',
        'classroom' => 'XI RPL 2',
    ],
    [
        'nis' => '10007',
        'name' => 'Galih Maulana',
        'classroom' => 'XI RPL 1',
    ],
    [
        'nis' => '10008',
        'name' => 'Hafiz Akbar',
        'classroom' => 'XI RPL 2',
    ],
    [
        'nis' => '10009',
        'name' => 'Ilham Hidayat',
        'classroom' => 'XI RPL 1',
    ],
    [
        'nis' => '10010',
        'name' => 'Joko Firmansyah',
        'classroom' => 'XI RPL 2',
    ],
];
        return view('admin.students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
