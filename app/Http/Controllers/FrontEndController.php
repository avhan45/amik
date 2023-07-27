<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Gallery;
use App\Models\Pendidikan;
use App\Models\Pengumuman;
use App\Models\Profile;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Carbon;



class FrontEndController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $pendidikan = Pendidikan::all();
        // Berita Paginate
        $berita = Berita::orderBy('created_at', 'desc')->paginate(4);
        $pengumuman = Pengumuman::all();
        $galeri = Gallery::orderBy('created_at', 'desc')->paginate(6);
        $visi = Profile::where('judul', 'visi')->first();
        $misi = Profile::where('judul', 'misi')->first();
        $sejarah = Profile::where('judul', 'sejarah')->first();
        $peng = Pengumuman::orderBy('created_at', 'desc')->take(3)->get();
        $setting = Setting::first();
        $hari = Carbon::now()->translatedFormat('l');
        return view('frontend.index', compact('sliders', 'pendidikan','galeri', 'pengumuman', 'berita', 'peng', 'visi', 'misi', 'sejarah', 'setting', 'hari'));
    }
    public function list()
    {
        $setting = Setting::first();
        $profiles = Profile::all();
        return view('frontend.profile_list', compact('setting', 'profiles'));
    }
    public function visi()
    {
        $visi = Profile::where('judul', 'visi')->first();
        return Response::json(array('visi' => $visi));
    }
    public function misi()
    {
        $setting = Setting::first();
        $misi = Profile::where('judul', 'misi')->first();
        return Response::json(array('misi' => $misi));
    }
    public function sejarah()
    {
        $setting = Setting::first();
        $sejarah = Profile::where('judul', 'sejarah')->first();
        return Response::json(array('sejarah' => $sejarah));
    }

    public function listpendidikan()
    {
        $setting = Setting::first();
        $pendidikan = Pendidikan::all();
        return view('frontend.pendidikan_list', compact('setting', 'pendidikan'));
    }
    public function listberita()
    {
        $setting = Setting::first();
        $beritas = Berita::orderBy('created_at', 'desc')->paginate(4);
        return view('frontend.berita_list', compact('setting', 'beritas'));
    }
    public function listpengumuman()
    {
        $setting = Setting::first();
        $pengumumans = Pengumuman::orderBy('created_at', 'desc')->paginate(4);
        return view('frontend.pengumuman_list', compact('setting', 'pengumumans'));
    }
    public function detailberita($id)
    {
        $setting = Setting::first();
        $berita = Berita::find($id);
        $listAll = Berita::all();
        return view('frontend.berita_detail', compact('setting', 'berita', 'listAll'));
    }
    public function detailpengumuman($id)
    {
        $setting = Setting::first();
        $post = Pengumuman::find($id);
        return view('frontend.pengumuman_detail', compact('setting', 'post'));
    }
    public function listgallery()
    {
        $setting = Setting::first();
        $galeri = Gallery::orderBy('created_at', 'desc')->paginate(10);
        return view('frontend.gallery_list', compact('setting', 'galeri'));
    }
}
