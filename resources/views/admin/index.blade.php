@extends('layouts.admintmp')
@section('content')

<center><h1>&#8362; Hai, {{ Auth::user()->name }} &#8362;</h1></center><br>
{{-- <img src="/assets/img/admin/welcome.gif" class="img-fluid" alt="Responsive image"><br> --}}
<center><h2>&#8362; Selamat Datang Admin &#8362;</h2></center>

@endsection
