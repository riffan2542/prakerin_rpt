<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;

class Frontend_Controller extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(4)->get();
        return view('guest.index', compact('artikel'));
    }

    public function allblog(Request $request)
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $artikel = Artikel::where('judul', 'LIKE', "%$cari%")->paginate(4);
        }
        return view('guest.blog.dashboard', compact('artikel'));
    }

    public function detailblog(Artikel $artikel)
    {
        return view('guest.blog.detail', compact('artikel'));
    }

    public function blogcat(Kategori $kategori)
    {
        $artikel = $kategori->artikel()->latest()->paginate(5);
        return view('guest.blog.dashboard', compact('artikel', 'kategori'));
    }

    public function blogtag(Tag $tag)
    {
        $artikel = $tag->artikel()->latest()->paginate(5);
        return view('guest.blog.dashboard', compact('artikel', 'tag'));
    }
}
