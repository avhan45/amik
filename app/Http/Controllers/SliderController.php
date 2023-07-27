<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = new Slider();
        $sliders = $sliders->all();
        $setting = Setting::first();
        return view('admin.slider', compact('sliders', 'setting'));
    }

    public function create()
    {
        $setting = Setting::first();
        return view('admin.slider_create', compact('setting'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
        ],
        [
            'judul.required' => 'Judul tidak boleh kosong',
            'gambar.required' => 'Gambar tidak boleh kosong',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
        ]);
        $image = $request->file('gambar')->store('slider');

        $slider = new Slider();
        $slider->judul = $request->judul;
        $slider->keterangan = $request->keterangan;
        $slider->gambar = $image;
        $slider->save();
        return redirect('slider')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        $setting = Setting::first();
        return view('admin.slider_edit', compact('slider', 'setting'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
        ],
        [
            'judul.required' => 'Judul tidak boleh kosong',
            'gambar.required' => 'Gambar tidak boleh kosong',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
        ]);
        $slider = Slider::find($id);
        $slider->judul = $request->judul;
        $slider->keterangan = $request->keterangan;
        if ($request->hasFile('gambar')) {
            Storage::delete($slider->gambar);
            $image = $request->file('gambar')->store('slider');
            $slider->gambar = $image;
        }else{
            $slider->gambar = $slider->gambar;
        }
        $slider->save();
        return redirect('slider')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        Storage::delete('public/slider/'.$slider->gambar);
        $slider->delete();
        return redirect()->route('slider.index')->with('success', 'Data berhasil dihapus');
    }
}
