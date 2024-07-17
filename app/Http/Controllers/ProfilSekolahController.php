<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProfilSekolahController extends Controller
{
    public function index()
    {
        $profilSekolah = ProfilSekolah::first();
        return view('master.profil_sekolah.index', compact('profilSekolah'));
    }

    public function update(Request $request, $npsn)
    {
        $request->validate([
            'nm_sekolah' => 'required',
            'status' => 'required',
        ]);

        $profilSekolah = ProfilSekolah::find($npsn);
        $profilSekolah->update($request->all());
        return redirect()->route('profil-sekolah.index')
            ->with('success', 'Profil Sekolah updated successfully.');
    }
}
