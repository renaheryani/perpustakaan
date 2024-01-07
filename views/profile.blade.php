@extends('layouts.main')

@section('title', 'Profile')

@section('content')
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div class="mt-5">
    <h4 style="text-align: center;">Daftar Peminjaman Buku</h4>
    <br>
    <x-rent-log-table :rentlog='$rent_logs' />
</div>
@endsection