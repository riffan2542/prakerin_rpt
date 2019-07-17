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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman review Berita</div>
                <br>
                <center><a href="{{ route('review.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Games</th>
                                <th>Rating</th>
                                <th>Foto</th>
                                {{--  <th>Konten</th>  --}}
                                <th>Tag</th>
                                <th>Kategori</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($review as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_games }}</td>
                    <td>{{ $data->rating }}</td>
                    <td><img src="{{ asset('assets/img/review/'.$data->foto) }}" alt="" height="500px" width="500px"></td>
                    {{--  <td>{!! $data->konten !!}</td>  --}}
                    <td>
                        @foreach ($data->tagrev as $a)
                            {{ $a->nama_tag }}
                        @endforeach
                    </td>
                    <td>{{ $data->kategorirev->nama_kategori }}</td>
                    <td><a href="{{ route('review.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('review.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('review.destroy', $data->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
