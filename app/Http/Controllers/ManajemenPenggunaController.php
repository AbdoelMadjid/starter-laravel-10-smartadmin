<?php

namespace App\Http\Controllers;

use App\Models\ManajemenPengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManajemenPenggunaController extends Controller
{
    public function index()
    {
        $users = ManajemenPengguna::all();
        return view('admin.manajemen_pengguna.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        ManajemenPengguna::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('manajemen_pengguna.index')->with('success', 'User created successfully.');
    }

    public function update(Request $request, ManajemenPengguna $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('manajemen_pengguna.index')->with('success', 'User updated successfully.');
    }

    public function destroy(ManajemenPengguna $user)
    {
        $user->delete();
        return redirect()->route('manajemen_pengguna.index')->with('success', 'User deleted successfully.');
    }
}
