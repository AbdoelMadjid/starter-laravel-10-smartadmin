<?php

namespace App\Http\Controllers;

use App\Models\BiodataPtk;
use App\Models\User;
use Flasher\Toastr\Laravel\Facade\Toastr;
use Illuminate\Http\Request;

class BiodataPtkController extends Controller
{
    public function index()
    {
        $biodata_ptks = BiodataPtk::all();
        return view('master.biodata_ptk.index', compact('biodata_ptks'));
    }

    public function create()
    {
        return view('master.biodata_ptk.create');
    }

    public function store(Request $request)
    {
        /*         $request->validate([
            'namalengkap' => 'required|string|max:100',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'email' => 'required|email|max:100|unique:biodata_ptks,email',
            'nomorhp' => 'required|string|max:100',
            // tambahkan validasi sesuai dengan kebutuhan Anda
        ]); */

        $biodata_ptk = BiodataPtk::create($request->all());

        // Buat user jika belum ada
        $user = User::create([
            'name' => $biodata_ptk->namalengkap,
            'email' => $biodata_ptk->email,
            'password' => bcrypt('defaultpassword'), // atau generate password secara acak
            'role' => 'Guru Mapel', // sesuaikan dengan kebutuhan aplikasi
        ]);

        // Hubungkan user dengan biodata_ptk
        $biodata_ptk->user_id = $user->id;
        $biodata_ptk->save();

        return redirect()->route('biodata_ptk.index')
            ->with('success', 'Data Biodata PTK berhasil disimpan.');
    }

    public function show($id)
    {
        $biodata_ptk = BiodataPtk::findOrFail($id);
        return view('master.biodata_ptk.show', compact('biodata_ptk'));
    }

    public function edit($id)
    {
        $biodata_ptk = BiodataPtk::findOrFail($id);
        return view('master.biodata_ptk.edit', compact('biodata_ptk'));
    }

    public function update(Request $request, $id)
    {
        /*         $request->validate([
            'namalengkap' => 'required|string|max:100',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'email' => 'required|email|max:100|unique:biodata_ptks,email,' . $id,
            'nomorhp' => 'required|string|max:100',
            // tambahkan validasi sesuai dengan kebutuhan Anda
        ]); */

        $biodata_ptk = BiodataPtk::findOrFail($id);
        $biodata_ptk->update($request->all());

        // Perbarui juga user jika diperlukan
        $user = $biodata_ptk->user;
        $user->name = $biodata_ptk->namalengkap;
        $user->email = $biodata_ptk->email;
        $user->save();

        return redirect()->route('biodata_ptk.index')
            ->with('success', 'Data Biodata PTK berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $biodata_ptk = BiodataPtk::findOrFail($id);

        // Hapus juga user jika diperlukan
        $user = $biodata_ptk->user;
        if ($user) {
            $user->delete();
        }

        if ($biodata_ptk->delete()) {
            Toastr::success('Data Biodata PTK berhasil dihapus.', 'Sukses');
        } else {
            Toastr::error('Gagal menghapus data Biodata PTK.', 'Error');
        }

        return redirect()->route('biodata_ptk.index');
    }
}
