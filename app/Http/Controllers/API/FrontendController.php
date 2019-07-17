<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function latest()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(3)->get();
        $response = [
            'success' => true,
            'data' => $artikel,
            'massage' => 'berhasil.'
        ];
        return response()->json($response, 200);
    }

    public function all()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(5)->get();
        $response = [
            'success' => true,
            'data' => $artikel,
            'massage' => 'berhasil.'
        ];
        return response()->json($response, 200);
    }
    //   public function menu()
    // {
    //     $kategori = Kategori::orderBy('created_at', 'desc')->get();
    //      $response = [
    //             'success' =>true,
    //             'data' => $kategori,
    //           'massage' =>'berhasil.'
    //         ];
    //         return response()->json($response,200);

    // }
    //  public function index()
    //  {
    //      $menu = Kategori::get();
    //      $populer = Artikel::inRandomOrdertake(3)->get();
    //      $konten = Artikel::where('headline', 1)->orderBy('created_at', 'desc')->take(3)->get();
    //      $article = Artikel::select('articles.title', 'articles.slug', 'headline', 'image', 'categories.title as categories', 'users.name as author')
    //          ->join('users', 'users.id', '=', 'articles.user_id')
    //          ->join('categories', 'categories.id', '=', 'articles.category_id')
    //           ->paginate(2);
    //      $trending = Artikel::inRandomOrder()->take(3)->get();
    //      $latest = Artikel::orderBy('created_at', 'desc')->take(4)->get();
    //      $response = [
    //          'success' => true,
    //          'data' => ['menu' => $menu, 'top' => $populer, 'populer' => $konten, 'konten' => $article, 'trending' => $trending, 'latest' => $latest],
    //          'message' => 'Berhasil.'
    //      ];
    //      return response()->json($response, 200);
    //  }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
