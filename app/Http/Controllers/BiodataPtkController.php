<?php

namespace App\Http\Controllers;

use App\Models\BiodataPtk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        // Validasi data input
        $request->validate([
            // sesuaikan dengan aturan validasi yang dibutuhkan
            'nip' => 'nullable|string|max:50',
            'gelardepan' => 'nullable|string|max:15',
            'namalengkap' => 'required|string|max:100',
            'gelarbelakang' => 'required|string|max:15',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'jenisguru' => 'required|in:Kepala Sekolah,Produktif,Umum,BP/BK,Tata Usaha',
            'tempatlahir' => 'required|string|max:30',
            'tanggallahir' => 'required|date',
            'agama' => 'required|string|max:15',
            'email' => 'required|email|unique:biodata_ptks,email',
            'nomorhp' => 'required|string|max:100',
            'photo' => 'nullable|image|max:2048', // max 2MB, bisa disesuaikan
            'motto' => 'nullable|string',
            'alamat_dusun' => 'nullable|string|max:50',
            'alamat_jalan' => 'nullable|string|max:50',
            'alamat_norumah' => 'nullable|string|max:3',
            'alamat_rt' => 'nullable|string|max:3',
            'alamat_rw' => 'nullable|string|max:3',
            'alamat_desa' => 'required|string|max:50',
            'alamat_kec' => 'required|string|max:50',
            'alamat_kab' => 'required|string|max:50',
            'alamat_kodepos' => 'nullable|string|max:7',
            'aktif' => 'required|in:Aktif,Tidak Aktif,Pensiun,Pindah,Keluar',
        ]);

        // Proses tambah data biodata PTK
        $biodataPtk = new BiodataPtk();
        $biodataPtk->id_guru = $this->generateIdGuru();
        $biodataPtk->fill($request->except(['_token', 'photo']));

        // Simpan foto jika ada
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $biodataPtk->photo = $photoPath;
        }

        $biodataPtk->save();

        // Buat akun user
        $user = new User();
        $user->name = $biodataPtk->namalengkap;
        $user->email = $biodataPtk->email;
        $user->password = Hash::make('password'); // ganti dengan password yang sesuai
        $user->role = 'Guru Mapel'; // sesuaikan role sesuai kebutuhan
        $user->save();

        return redirect()->route('biodata_ptks.index')->with('success', 'Biodata PTK berhasil ditambahkan.');
    }

    public function show($id)
    {
        $biodataPtk = BiodataPtk::findOrFail($id);
        return view('master.biodata_ptk.show', compact('biodataPtk'));
    }

    public function edit($id)
    {
        $biodataPtk = BiodataPtk::findOrFail($id);
        return view('master.biodata_ptk.edit', compact('biodataPtk'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            // sesuaikan dengan aturan validasi yang dibutuhkan
            'nip' => 'nullable|string|max:50',
            'gelardepan' => 'nullable|string|max:15',
            'namalengkap' => 'required|string|max:100',
            'gelarbelakang' => 'required|string|max:15',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'jenisguru' => 'required|in:Kepala Sekolah,Produktif,Umum,BP/BK,Tata Usaha',
            'tempatlahir' => 'required|string|max:30',
            'tanggallahir' => 'required|date',
            'agama' => 'required|string|max:15',
            'email' => 'required|email|unique:biodata_ptks,email,' . $id,
            'nomorhp' => 'required|string|max:100',
            'photo' => 'nullable|image|max:2048', // max 2MB, bisa disesuaikan
            'motto' => 'nullable|string',
            'alamat_dusun' => 'nullable|string|max:50',
            'alamat_jalan' => 'nullable|string|max:50',
            'alamat_norumah' => 'nullable|string|max:3',
            'alamat_rt' => 'nullable|string|max:3',
            'alamat_rw' => 'nullable|string|max:3',
            'alamat_desa' => 'required|string|max:50',
            'alamat_kec' => 'required|string|max:50',
            'alamat_kab' => 'required|string|max:50',
            'alamat_kodepos' => 'nullable|string|max:7',
            'aktif' => 'required|in:Aktif,Tidak Aktif,Pensiun,Pindah,Keluar',
        ]);

        // Proses update data biodata PTK
        $biodataPtk = BiodataPtk::findOrFail($id);
        $biodataPtk->fill($request->except(['_token', 'photo']));

        // Simpan foto jika ada
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $biodataPtk->photo = $photoPath;
        }

        $biodataPtk->save();

        return redirect()->route('biodata_ptks.index')->with('success', 'Biodata PTK berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $biodataPtk = BiodataPtk::findOrFail($id);
        $biodataPtk->delete();

        return redirect()->route('biodata_ptks.index')->with('success', 'Biodata PTK berhasil dihapus.');
    }

    // Method untuk generate ID Guru secara otomatis
    private function generateIdGuru()
    {
        $lastId = BiodataPtk::max('id_guru');
        if ($lastId) {
            $number = (int) substr($lastId, 5) + 1;
            return 'guru_' . str_pad($number, 4, '0', STR_PAD_LEFT);
        } else {
            return 'guru_0001';
        }
    }
}
