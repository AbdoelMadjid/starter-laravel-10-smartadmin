<?php

namespace App\Http\Controllers;

use App\Models\AppFitur;
use Illuminate\Http\Request;

class AppFiturController extends Controller
{
    public function index()
    {
        $appFiturs = AppFitur::all();
        return view('admin.app_fiturs.index', compact('appFiturs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fitur' => 'required|string|max:255',
            'aktif' => 'required|in:Y,N',
        ]);

        AppFitur::create($request->all());
        return redirect()->route('app_fiturs.index')->with('success', 'Fitur created successfully.');
    }

    public function update(Request $request, AppFitur $appFitur)
    {
        $request->validate([
            'nama_fitur' => 'required|string|max:255',
            'aktif' => 'required|in:Y,N',
        ]);

        $appFitur->update($request->all());
        return redirect()->route('app_fiturs.index')->with('success', 'Fitur updated successfully.');
    }

    public function destroy(AppFitur $appFitur)
    {
        $appFitur->delete();
        return redirect()->route('app_fiturs.index')->with('success', 'Fitur deleted successfully.');
    }
}
