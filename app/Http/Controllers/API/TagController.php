<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::all();

        // Tanda '!' bisa diganti dengan 'is_null' dengan tambahan simbol dan variabel '($tag)' setelahnya.
        if (count($tag) <= 0) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Tag tidak ditemukan!'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'Tag ditemukan!'
        ];
        return response()->json($response, 200);
    }

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
        // 1. Tampung semua inputan ke $input;
        $input = $request->all();

        // 2. Buat validasi ditampung ke $validator
        $validator = Validator::make($input, [
            'nama_tag' => 'required|min:1'
        ]);

        // 3. Cek validasi
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        // 4. Buat fungsi untuk menghandle semua inputan -> dimasukkan ke dalam table
        $tag = Tag::create($input);

        // 5. Menampilkan response
        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'Tag berhasil ditambahkan!'
        ];

        // 6. Tampilkan hasil
        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::find($id);
        // $input = $request->all();
        if (!$tag) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Tag tidak ditemukan!'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'Berhasil!'
        ];
        return response()->json($response, 200);
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
        $tag = Tag::find($id);
        $input = $request->all();

        if (!$tag) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Tag tidak ditemukan!'
            ];
            return response()->json($response, 404);
        }

        $validator = Validator::make($input, [
            'nama_tag' => 'required | min:1'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $tag->nama_tag = $input['nama_tag'];
        $tag->slug = $input['slug'];
        $tag->save();

        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'Berhasil!'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);

        if (!$tag) {
            $response = [
                'success' => false,
                'data' => 'Gagal menghapus!.',
                'message' => 'Tag tidak ditemukan!'
            ];
            return response()->json($response, 404);
        }

        $tag->delete();
        $response = [
            'success' => true,
            'data' => $tag,
            'message' => $tag->nama_tag . 'Tag berhasil dihapus!'
        ];
        return response()->json($response, 200);
    }
}
