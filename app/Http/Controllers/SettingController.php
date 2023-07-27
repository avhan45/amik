<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.profile', compact('setting'));
    }
    
    public function update(Request $request)
    {
      $request->validate([
        'nama_situs' => 'required',
        'lengkap' => 'required',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ],
      [
        'nama_situs.required' => 'Nama situs tidak boleh kosong',
        'lengkap.required' => 'Lengkap tidak boleh kosong',
        'logo.required' => 'Logo tidak boleh kosong',
      ]);
      if($request->hasFile('logo')){
        $setting = Setting::first();
        $setting->nama_situs = $request->nama_situs;
        $setting->lengkap = $request->lengkap;
        if($request->hasFile('logo')){
            Storage::delete($setting->logo);
            $logo = $request->file('logo')->store('logo');
            $setting->logo = $logo;
        }else{
            $setting->logo = $request->logo;
        }
        $setting->save();
        return redirect('profile')->with('success', 'Data berhasil diperbarui');
      }
    }
}
