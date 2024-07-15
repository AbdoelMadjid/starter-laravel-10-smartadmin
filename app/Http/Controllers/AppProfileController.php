<?php

namespace App\Http\Controllers;

use App\Models\AppProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppProfileController extends Controller
{
    public function show()
    {
        $appProfile = AppProfile::first();
        return view('app_profiles.show', compact('appProfile'));
    }

    public function edit()
    {
        $appProfile = AppProfile::first();
        return view('app_profiles.edit', compact('appProfile'));
    }

    public function update(Request $request)
    {
        $appProfile = AppProfile::first();
        $request->validate([
            'app_nama' => 'required|string|max:255',
            'app_deskripsi' => 'required|string',
            'app_tahun' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'app_pengembang' => 'required|string|max:255',
            'app_icon' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'app_logo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('app_icon')) {
            if ($appProfile->app_icon) {
                unlink(public_path('admin/img/' . $appProfile->app_icon));
            }
            $appIconFile = $request->file('app_icon');
            $appIconName = time() . '_' . $appIconFile->getClientOriginalName();
            $appIconFile->move(public_path('admin/img'), $appIconName);
            $appProfile->app_icon = $appIconName;
        }

        if ($request->hasFile('app_logo')) {
            if ($appProfile->app_logo) {
                unlink(public_path('admin/img/' . $appProfile->app_logo));
            }
            $appLogoFile = $request->file('app_logo');
            $appLogoName = time() . '_' . $appLogoFile->getClientOriginalName();
            $appLogoFile->move(public_path('admin/img'), $appLogoName);
            $appProfile->app_logo = $appLogoName;
        }

        $appProfile->update($request->except(['app_icon', 'app_logo']));

        return redirect()->route('app_profiles.show')->with('success', 'Profile sukses di update.');
    }
}
