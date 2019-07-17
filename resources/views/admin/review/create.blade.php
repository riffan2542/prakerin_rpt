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
                <div class="card-header">Membuat Data Review</div>
                <div class="card-body">
                    <form action="{{ route('review.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Nama Games</label>
        <input class="form-control" type="text" name="nama_games">
    </div>
    <div class="form-group">
        <label for="">Rating</label>
        <input class="form-control" type="text" name="rating">
    </div>
    <div class="form-group">
        <label>Konten</label>
        <textarea id="editorl" rows="8" cols="30" type="text" name="konten"></textarea>
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <label for="">Tag</label>
        <select name="tag[]" id="select2" class="form-control multiple" multiple>
    @foreach($tagrev as $data)
        <option value="{{ $data->id }}">
            {{ $data->nama_tag }}
        </option>
    @endforeach
        </select>
        </div>
    <div class="form-group">
        <label for="">Kategori</label>
        <select name="kategorirev" class="form-control">
    @foreach($kategorirev as $data)
        <option value="{{ $data->id }}">
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
        <a href="{{ url('review') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
