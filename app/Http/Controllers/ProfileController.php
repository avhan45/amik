<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $visi = Profile::where('judul', 'visi')->first();
        $misi = Profile::where('judul', 'misi')->first();
        $sejarah = Profile::where('judul', 'sejarah')->first();
        $setting = Setting::first();
        return view('admin.profile', compact('visi', 'misi', 'sejarah', 'setting'));
    }

    public function update(Request $request, Profile $profile)
    {
        
        $profile->judul = $request->judul;
        $profile->isi = $request->isi;
        $profile->save();
        return redirect('profile')->with('success', 'Data berhasil diperbarui');
    }
}
