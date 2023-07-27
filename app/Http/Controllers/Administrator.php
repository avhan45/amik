<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class Administrator extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.home', compact('setting'));
    }

    public function list()
    {
        $setting = Setting::first();
        $user = User::all();
        return view('admin.user.list', compact('setting', 'user'));
    }
    public function create()
    {
        $setting = Setting::first();
        return view('admin.user.create', compact('setting'));
    }
    
    public function edit($id)
    {
        $setting = Setting::first();
        $user = User::find($id);
        return view('admin.user.edit', compact('setting', 'user'));
    }
    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.list')->with('success', 'Data berhasil diubah');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.list')->with('success', 'Data berhasil dihapus');
    }    
}
