<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTahunAjaranRequest;
use App\Http\Requests\UpdateTahunAjaranRequest;

class TahunAjaranController extends Controller
{
    public function index()
    {
        $tahunAjarans = TahunAjaran::all();
        return view('master.tahun_ajaran.index', compact('tahunAjarans'));
    }

    public function store(Request $request)
    {
        $validator = TahunAjaran::validate($request->all());

        if ($validator->fails()) {
            return redirect()->route('tahun_ajaran.index')
                ->withErrors($validator)
                ->withInput();
        }

        TahunAjaran::create($request->all());

        return redirect()->route('tahun_ajaran.index')->with('success', 'Tahun Ajaran created successfully.');
    }

    public function update(Request $request, TahunAjaran $tahunAjaran)
    {
        $request->validate([
            'tahunajaran' => 'required|string|max:255',
            'semester' => 'required|in:Ganjil,Genap',
            'aktif' => 'required|in:Y,N',
        ]);

        // Jika mengubah status aktif dari N menjadi Y
        if ($request->aktif === 'Y') {
            // Set semua tahun ajaran lain menjadi tidak aktif (aktif = 'N')
            TahunAjaran::where('id_ta', '!=', $tahunAjaran->id_ta)->update(['aktif' => 'N']);
        }

        $tahunAjaran->update($request->all());

        return redirect()->route('tahun_ajaran.index')->with('success', 'Tahun Ajaran updated successfully.');
    }

    public function destroy(TahunAjaran $tahunAjaran)
    {
        $tahunAjaran->delete();

        return redirect()->route('tahun_ajaran.index')->with('success', 'Tahun Ajaran deleted successfully.');
    }
}
