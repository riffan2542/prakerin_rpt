<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use Session;
use Auth;
use App\Kategori;
use App\Tag;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\Jobs\SyncJob;

class Artikel_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->get();
        return view('admin.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('admin.artikel.create', compact('kategori', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul);
        $artikel->konten = $request->konten;
        $artikel->user_id = Auth::user()->id;
        $artikel->kategori_id = $request->kategori;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/artikel/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $artikel->foto = $filename;
        }

        $artikel->save();
        $artikel->tag()->attach($request->tag);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data artikel berjudul <b>$artikel->judul</b>!"
        ]);
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        $tag = Tag::all();
        $kategori = Kategori::all();
        $selected = $artikel->tag->pluck('id')->toArray();
        return view('admin.artikel.show', compact('artikel', 'selected', 'tag', 'kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        $tag = tag::all();
        $selected = $artikel->tag->pluck('id')->toArray();
        return view('admin.artikel.edit', compact('artikel', 'selected', 'kategori', 'tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul, '-');
        $artikel->konten = $request->konten;
        $artikel->user_id = Auth::user()->id;
        $artikel->kategori_id = $request->kategori_id;

        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = public_path().
                            '/assets/img/artikel/';
            $filename = str_random(6).'_'
                        .$file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,
                $filename
            );
            // hapus foto lama, jika ada
            if ($artikel->foto){
                $old_foto = $artikel->foto;
                $filepath = public_path()
                .'/assets/img/artikel'
                .$artikel->foto;    
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus/tidak ada
                }
            }
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->sync($request->tag_id);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        if ($artikel->foto) {
            $old_foto = $artikel->foto;
            $filepath = public_path() . '/assets/img/artikel/' . $artikel->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }

        $artikel->tag()->detach($artikel->id);
        $artikel->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data artikel berjudul <b>$artikel->judul</b>!"
        ]);
        return redirect()->route('artikel.index');
    }
}
