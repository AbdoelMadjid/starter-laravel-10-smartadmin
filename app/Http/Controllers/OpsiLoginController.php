<?php

namespace App\Http\Controllers;

use App\Models\OpsiLogin;
use Illuminate\Http\Request;


class OpsiLoginController extends Controller
{
    public function index()
    {
        $opsiLogins = OpsiLogin::all();
        return view('opsi_logins.index', compact('opsiLogins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'peran' => 'required|string|max:50',
            'aktif' => 'required|in:Y,N',
        ]);

        OpsiLogin::create($request->all());
        return redirect()->route('opsi_logins.index')->with('success', 'Opsi Login sukses di tambahkan.');
    }

    public function update(Request $request, OpsiLogin $opsiLogin)
    {
        $request->validate([
            'peran' => 'required|string|max:50',
            'aktif' => 'required|in:Y,N',
        ]);

        $opsiLogin->update($request->all());
        return redirect()->route('opsi_logins.index')->with('success', 'Opsi Login sukses di update.');
    }

    public function destroy(OpsiLogin $opsiLogin)
    {
        $opsiLogin->delete();
        return redirect()->route('opsi_logins.index')->with('success', 'Opsi Login sukses di hapus.');
    }

    public function toggleAktif(Request $request)
    {
        $opsi = OpsiLogin::find($request->id);
        $opsi->aktif = $request->aktif;
        $opsi->save();

        return response()->json(['message' => 'Opsi Login sukses di update.']);
    }
}
