<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::all();
        $setting = Setting::first();
        return view('admin.pengumuman', compact('pengumumans', 'setting'));
    }
    public function create()
    {
        $setting = Setting::first();
        return view('admin.pengumuman_create', compact('setting'));
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
        $pengumuman = new Pengumuman;
        $pengumuman->judul = $request->judul;
        $pengumuman->isi = $request->isi;
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $pengumuman->gambar = $file->store('pengumuman');
        }else{
            $pengumuman->gambar = '';
        }
        $pengumuman->save();
        return redirect()->route('pengumuman.index')->with('success', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        $setting = Setting::first();
        return view('admin.pengumuman_edit', compact('pengumuman', 'setting'));
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
        $pengumuman = Pengumuman::find($id);
        $pengumuman->judul = $request->judul;
        $pengumuman->isi = $request->isi;
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $pengumuman->gambar = $file->store('pengumuman');
        }else{
            $pengumuman->gambar = '';
        }
        $pengumuman->save();
        return redirect()->route('pengumuman.index')->with('success', 'Data berhasil diubah');
    }
    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        Storage::delete($pengumuman->gambar);
        $pengumuman->delete();
        return redirect()->route('pengumuman.index')->with('success', 'Data berhasil dihapus');
    }
}
