@extends('layouts.main')

@section('title', 'Pengguna')

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
            <th>Username</th>
            <th>No.Telepon</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->username }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->status }}</td>
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