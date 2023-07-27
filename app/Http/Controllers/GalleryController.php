<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galeri = Gallery::all();
        $setting = Setting::first();
        return view('admin.gallery', compact('galeri', 'setting'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong',
            'gambar.required' => 'Gambar tidak boleh kosong',
            'gambar.image' => 'Gambar harus berupa gambar',
        ]);
        $image = $request->file('gambar')->store('gallery');
        $gallery = new Gallery();
        $gallery->nama = $request->nama;
        $gallery->gambar = $image;
        $gallery->save();
        return redirect('gallery')->with('success', 'Data berhasil ditambahkan');
    }
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        Storage::delete($gallery->gambar);
        $gallery->delete();
        return redirect('gallery')->with('success', 'Data berhasil dihapus');
    }
}
