<?php

namespace App\Http\Controllers;

use App\Models\AppFitur;
use Illuminate\Http\Request;

class AppFiturController extends Controller
{
    public function index()
    {
        $appFiturs = AppFitur::all();
        return view('app_fiturs.index', compact('appFiturs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fitur' => 'required|string|max:255',
            'aktif' => 'required|in:Y,N',
        ]);

        AppFitur::create($request->all());
        return redirect()->route('app_fiturs.index')->with('success', 'Fitur sukses di tambahkan.');
    }

    public function update(Request $request, AppFitur $appFitur)
    {
        $request->validate([
            'nama_fitur' => 'required|string|max:255',
            'aktif' => 'required|in:Y,N',
        ]);

        $appFitur->update($request->all());
        return redirect()->route('app_fiturs.index')->with('success', 'Fitur sukses di update.');
    }

    public function destroy(AppFitur $appFitur)
    {
        $appFitur->delete();
        return redirect()->route('app_fiturs.index')->with('success', 'Fitur sukses di hapus.');
    }

    public function toggleAktif(Request $request)
    {
        $fitur = AppFitur::find($request->id);
        $fitur->aktif = $request->aktif;
        $fitur->save();

        return response()->json(['message' => 'Fitur sukses di update.']);
    }
}
