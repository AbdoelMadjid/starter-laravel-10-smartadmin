<?php

namespace App\Http\Controllers;

use App\Models\KompetensiKeahlian;
use App\Models\BidangKeahlian;
use App\Models\ProgramKeahlian;
use Illuminate\Http\Request;

class KompetensiKeahlianController extends Controller
{
    public function index()
    {
        $kompetensiKeahlians = KompetensiKeahlian::with('bidangKeahlian')->get();
        $kompetensiKeahlians = KompetensiKeahlian::all();
        return view('master.kompetensi_keahlian.index', compact('kompetensiKeahlians'));
    }

    public function create()
    {
        $bidangKeahlians = BidangKeahlian::all();
        $programKeahlians = ProgramKeahlian::all();
        return view('master.kompetensi_keahlian.create', compact('bidangKeahlians', 'programKeahlians'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_paket' => 'required|unique:kompetensi_keahlians',
            'kode_bidang' => 'required',
            'kode_program' => 'required',
            'nama_paket' => 'required',
            'singkatan' => 'required',
        ]);

        KompetensiKeahlian::create($request->all());
        return redirect()->route('kompetensi-keahlian.index')->with('success', 'Kompetensi Keahlian created successfully.');
    }

    public function show(KompetensiKeahlian $kompetensiKeahlian)
    {
        return view('kompetensi_keahlian.show', compact('kompetensiKeahlian'));
    }

    public function edit(KompetensiKeahlian $kompetensiKeahlian)
    {
        $bidangKeahlians = BidangKeahlian::all();
        $programKeahlians = ProgramKeahlian::all();
        return view('master.kompetensi_keahlian.edit', compact('kompetensiKeahlian', 'bidangKeahlians', 'programKeahlians'));
    }

    public function update(Request $request, KompetensiKeahlian $kompetensiKeahlian)
    {
        $request->validate([
            'kode_paket' => 'required',
            'kode_bidang' => 'required',
            'kode_program' => 'required',
            'nama_paket' => 'required',
            'singkatan' => 'required',
        ]);

        $kompetensiKeahlian->update($request->all());
        return redirect()->route('kompetensi-keahlian.index')->with('success', 'Kompetensi Keahlian updated successfully.');
    }

    public function destroy(KompetensiKeahlian $kompetensiKeahlian)
    {
        $kompetensiKeahlian->delete();
        return redirect()->route('kompetensi-keahlian.index')->with('success', 'Kompetensi Keahlian deleted successfully.');
    }
}
