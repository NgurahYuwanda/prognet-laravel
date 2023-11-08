<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class cekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home');
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
    public function show(Request $request)
    {
        $nama = $request->input('nama');
        $nim = $request->input('nim');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $agama = $request->input('agama');
        $alamat = $request->input('alamat');
        $telp = $request->input('telp');
        $hobi = $request->input('hobi');
        $hobi_string = implode(', ', $hobi);
        $prodi = $request->input('prodi');
        $email = $request->input('email');

        return view('show', [
            'nama' => $nama,
            'nim' => $nim,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'alamat' => $alamat,
            'telp' => $telp,
            'hobi' => $hobi,
            'hobi' => $hobi_string,
            'prodi' => $prodi,
            'email' => $email,
        ]);
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
