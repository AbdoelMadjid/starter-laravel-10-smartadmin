<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataGuru;

class DataGuruController extends Controller
{
    public function index()
    {
        $dataGurus = DataGuru::all();
        return view('master.tenaga_pendidik.index', compact('dataGurus'));
    }

    public function create()
    {
        return view('master.tenaga_pendidik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namalengkap' => 'required|string|max:100',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'jenisguru' => 'required|in:Kepala Sekolah,Produktif,Umum,BP/BK,Tata Usaha',
            'email' => 'required|email|max:100|unique:data_gurus,email',
        ]);

        $lastGuru = DataGuru::orderBy('id_guru', 'desc')->first();
        $nextId = $lastGuru ? ((int)substr($lastGuru->id_guru, 3)) + 1 : 1;
        $id_guru = 'Gr_' . str_pad($nextId, 4, '0', STR_PAD_LEFT);

        $dataGuru = new DataGuru($request->all());
        $dataGuru->id_guru = $id_guru;
        $dataGuru->save();

        return redirect()->route('tenaga_pendidik.index')->with('success', 'Data Guru created successfully.');
    }

    public function show($id)
    {
        $dataGuru = DataGuru::findOrFail($id);
        return view('master.tenaga_pendidik.show', compact('dataGuru'));
    }

    public function edit($id)
    {
        $dataGuru = DataGuru::findOrFail($id);
        return view('master.tenaga_pendidik.edit', compact('dataGuru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namalengkap' => 'required|string|max:100',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'jenisguru' => 'required|in:Kepala Sekolah,Produktif,Umum,BP/BK,Tata Usaha',
            'email' => 'required|email|max:100|unique:data_gurus,email,' . $id . ',id_guru',
        ]);

        $dataGuru = DataGuru::findOrFail($id);
        $dataGuru->update($request->all());

        return redirect()->route('tenaga_pendidik.index')->with('success', 'Data Guru updated successfully.');
    }

    public function destroy($id)
    {
        $dataGuru = DataGuru::findOrFail($id);
        $dataGuru->delete();

        return redirect()->route('tenaga_pendidik.index')->with('success', 'Data Guru deleted successfully.');
    }
}
