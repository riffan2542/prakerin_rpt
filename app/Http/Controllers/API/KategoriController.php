<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();

        // Tanda '!' bisa diganti dengan 'is_null' dengan tambahan simbol dan variabel '($kategori)' setelahnya.
        if (count($kategori) <= 0) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Kategori tidak ditemukan!'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $kategori,
            'message' => 'Kategori ditemukan!'
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
            'nama_kategori' => 'required|min:1'
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
        $kategori = Kategori::create($input);

        // 5. Menampilkan response
        $response = [
            'success' => true,
            'data' => $kategori,
            'message' => 'Kategori berhasil ditambahkan!'
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
        $kategori = Kategori::find($id);
        // $input = $request->all();
        if (!$kategori) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Kategori tidak ditemukan!'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $kategori,
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
        $kategori = Kategori::find($id);
        $input = $request->all();

        if (!$kategori) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Kategori tidak ditemukan!'
            ];
            return response()->json($response, 404);
        }

        $validator = Validator::make($input, [
            'nama_kategori' => 'required | min:1'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $kategori->nama_kategori = $input['nama_kategori'];
        $kategori->slug = $input['slug'];
        $kategori->save();

        $response = [
            'success' => true,
            'data' => $kategori,
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
        $kategori = Kategori::find($id);

        if (!$kategori) {
            $response = [
                'success' => false,
                'data' => 'Gagal menghapus!.',
                'message' => 'Kategori tidak ditemukan!'
            ];
            return response()->json($response, 404);
        }

        $kategori->delete();
        $response = [
            'success' => true,
            'data' => $kategori,
            'message' => $kategori->nama_kategori_kategori . 'Kategori berhasil dihapus!'
        ];
        return response()->json($response, 200);
    }
}
