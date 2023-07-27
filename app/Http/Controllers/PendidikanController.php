<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PendidikanController extends Controller
{
    public function index()
    {   
        $pendidikan = Pendidikan::all();
        $setting = Setting::first();
        return view('admin.pendidikan', compact('pendidikan', 'setting'));
    }
    public function create()
    {
        $setting = Setting::first();
        return view('admin.pendidikan_create', compact('setting'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'kd_pendidikan' => 'required',
            'jurusan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'kd_pendidikan.required' => 'Kode pendidikan tidak boleh kosong',
            'jurusan.required' => 'Jurusan tidak boleh kosong',
            'gambar.image' => 'Gambar harus berupa gambar',
            'gambar.mimes' => 'Gambar harus berupa gambar',
            'gambar.max' => 'Gambar tidak boleh lebih dari 2MB',
        ]);
        $pendidikan = new Pendidikan;
        $pendidikan->kd_pendidikan = $request->kd_pendidikan;
        $pendidikan->jurusan = $request->jurusan;
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $pendidikan->gambar = $file->store('pendidikan');
        }else{
            $pendidikan->gambar = '';
        }
        $pendidikan->save();
        return redirect()->route('pendidikan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pendidikan = Pendidikan::find($id);
        $setting = Setting::first();
        return view('admin.pendidikan_edit', compact('pendidikan', 'setting'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kd_pendidikan' => 'required',
            'jurusan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'kd_pendidikan.required' => 'Kode pendidikan tidak boleh kosong',
            'jurusan.required' => 'Jurusan tidak boleh kosong',
            'gambar.image' => 'Gambar harus berupa gambar',
            'gambar.mimes' => 'Gambar harus berupa gambar',
            'gambar.max' => 'Gambar tidak boleh lebih dari 2MB',
        ]);
        $pendidikan = Pendidikan::find($id);
        $pendidikan->kd_pendidikan = $request->kd_pendidikan;
        $pendidikan->jurusan = $request->jurusan;
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $pendidikan->gambar = $file->store('pendidikan');
        }else{
            $pendidikan->gambar = $pendidikan->gambar;
        }
        $pendidikan->save();
        return redirect()->route('pendidikan.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $pendidikan = Pendidikan::find($id);
        $pendidikan->delete();
        Storage::delete($pendidikan->gambar);
        return redirect()->route('pendidikan.index')->with('success', 'Data berhasil dihapus');
    }
}
