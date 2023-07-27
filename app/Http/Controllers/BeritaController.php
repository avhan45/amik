<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        $setting = Setting::first();
        return view('admin.berita', compact('berita', 'setting'));
    }

    public function create()
    {
        $setting = Setting::first();
        return view('admin.berita_create', compact('setting'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'mimes:jpeg,png,jpg|max:2048',
        ],
        [
            'judul.required' => 'Judul tidak boleh kosong',
            'isi.required' => 'Isi tidak boleh kosong',
            'gambar.mimes' => 'Gambar harus berupa gambar',
            'gambar.max' => 'Gambar tidak boleh lebih dari 2MB',
        ]
    );
        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $berita->gambar = $file->store('berita');
        }else{
            $berita->gambar = '';
        }
        $berita->save();
        return redirect()->route('berita.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $berita = Berita::find($id);
        $setting = Setting::first();
        return view('admin.berita_edit', compact('berita', 'setting'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'mimes:jpeg,png,jpg|max:2048',
        ],
        [
            'judul.required' => 'Judul tidak boleh kosong',
            'isi.required' => 'Isi tidak boleh kosong',
            'gambar.mimes' => 'Gambar harus berupa gambar',
            'gambar.max' => 'Gambar tidak boleh lebih dari 2MB',
        ]
    );
        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $berita->gambar = $file->store('berita');
        }else{
            $berita->gambar = '';
        }
        $berita->save();
        return redirect()->route('berita.index')->with('success', 'Data berhasil diubah');
    }
    public function destroy($id)
    {
        $berita = Berita::find($id);
        Storage::delete($berita->gambar);
        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Data berhasil dihapus');
    }
}
