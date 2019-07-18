@extends('layouts.admintmp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/select2.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/components/select2-init.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('editorl');

    $(document).ready(function () {
        $('#select2').select2();
    })
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Artikel</div>
                <div class="card-body">
                    <form action="{{ route('artikel.update', $artikel->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">Judul</label>
        <input class="form-control" value="{{ $artikel->judul }}" type="text" name="judul">
    </div>
    <div class="form-group">
        <label>Konten</label>
        <textarea id="editorl" rows="8" cols="30" type="text" name="konten">{{ $artikel->konten }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        @if (isset($artikel) && $artikel->foto)
        <p>
            <img src="{{ asset('/assets/img/artikel/'. $artikel->foto.'') }}" alt="Foto" width="100px" height="100px" style="border-radius: 6%">
        </p>
        @endif
        <input class="form-control" type="file" name="foto" value="{{ $artikel->foto }}" required>
    </div>
    <div class="form-group">
        <label for="">Tag</label>
        <select name="tag_id[]" id="s2_demo3" class="form-control multiple" multiple>
            @foreach($tag as $data)
                <option value="{{ $data->id }}"
                {{ (in_array($data->id, $selected)) ?
                    'selected="selected"' : '' }}>
                    {{ $data->nama_tag }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Kategori</label>
        <select name="kategori_id" class="form-control">
            @foreach($kategori as $data)
                <option value="{{ $data->id }}"
                    {{ $artikel->kategori->id ==
                        $data->id ? 'selected="selected"' : '' }}>
                    {{ $data->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('admin/artikel') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
