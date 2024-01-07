@extends('layouts.main')

@section('title', 'Log Peminjaman')

@section('content')
<h2 style="text-align: center;">Daftar Peminjaman Buku</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div>
    <a href="category-add" class="btn" style="background-color: #4e62bb; color:white;"><i class="bi bi-plus-lg"></i>Tambah</a>
</div>
<div class="my-4">
    <x-rent-log-table :rentlog='$rent_logs' />
</div>
@endsection