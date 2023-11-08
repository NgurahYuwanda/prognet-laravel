<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form_input()
    {
        return view('/form');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('index');
        //Memanggil semua data di dalam model atau tabel form
        $data = form::all();

        //Format data dan tampilkan di view
        return view('formlist', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form data baru
        return view('formtambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $form = new form();
        $form->nama = $request->nama;
        $form->nim = $request->nim;
        $form->jenis_kelamin = $request->jenis_kelamin;
        $form->agama = $request->agama;
        $form->telepon = $request->telepon;
        $form->prodi = $request->prodi;
        $form->alamat = $request->alamat;
        $form->save();
        return redirect('form');
    }

    /**
     * Display the specified resource.
     */
    public function show(form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(form $form)
    {
        //
        return view('formedit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, form $form)
    {
        //
        $form->nama = $request->nama;
        $form->nim = $request->nim;
        $form->jenis_kelamin = $request->jenis_kelamin;
        $form->agama = $request->agama;
        $form->telepon = $request->telepon;
        $form->prodi = $request->prodi;
        $form->alamat = $request->alamat;
        $form->save();
        return redirect('form');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(form $form)
    {
        //
        $form->delete();
        return redirect('form');
    }
}
