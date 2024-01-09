<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Anggota::all();
        return view('anggota.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Anggota::create([
        'nama_anda' => $request ->nama_anda,
        'alamat_anda' => $request ->alamat_anda,
        'no_telpone' => $request ->no_telpone,
        'tanggal_lahir' => $request->tanggal_lahir,  

        ]);
        return redirect('anggota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggota = Anggota::findOrFile($id);

        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Anggota::find($id);
        return view('anggota.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Anggota::findOrFail($id);

        $row->update([
            'nama_anda' => $request ->nama_anda,
            'alamat_anda' => $request ->alamat_anda,
            'no_telpone' => $request ->no_telpone,
            'tanggal_lahir' => $request->tanggal_lahir,     
        ]);

        return redirect('anggota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Anggota::findOrFail($id);

        $row->delete();

        return redirect('anggota');
    }
}
