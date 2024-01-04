@extends('layouts.main')

@section('title', 'Log Peminjaman')

@section('content')
<h2>Daftar Pengguna Perpustakaan</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div>
    <a href="category-add" class="btn" style="background-color: #4e62bb; color:white;"><i class="bi bi-plus-lg"></i>Tambah</a>
</div>
<div class="my-4">
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Pengguna</th>
            <th>Judul Buku</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Harus Kembali</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rentlogs as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->username }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->rent_date }}</td>
            <td>{{ $item->return_date }}</td>
            <td>{{ $item->actual_return_date }}</td>
            <td>
                <a href="#" class="btn btn-primary">Ubah</a>
                <a href="#" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection