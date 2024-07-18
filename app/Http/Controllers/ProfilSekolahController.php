<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProfilSekolahController extends Controller
{
    public function show()
    {
        $profilSekolah = ProfilSekolah::first();
        return view('master.profil_sekolah.show', compact('profilSekolah'));
    }

    public function edit()
    {
        $profilSekolah = ProfilSekolah::first();
        return view('master.profil_sekolah.edit', compact('profilSekolah'));
    }

    public function update(Request $request)
    {
        $profilSekolah = ProfilSekolah::first();
        $request->validate([
            'nm_sekolah' => 'required',
            'status' => 'required',
            'logo_sekolah' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('logo_sekolah')) {
            if ($profilSekolah->logo_sekolah) {
                unlink(public_path('admin/img/' . $profilSekolah->logo_sekolah));
            }
            $appLogoFile = $request->file('logo_sekolah');
            $appLogoName = time() . '_' . $appLogoFile->getClientOriginalName();
            $appLogoFile->move(public_path('admin/img'), $appLogoName);
            $profilSekolah->logo_sekolah = $appLogoName;
        }

        //$profilSekolah->update($request->all());
        $profilSekolah->update($request->except('logo_sekolah'));
        return redirect()->route('profil-sekolah.index')
            ->with('success', 'Profil Sekolah updated successfully.');
    }
}
