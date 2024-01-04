@extends('layouts.main')

@section('title', 'Kategori')

@section('content')
<h2>Daftar Kategori</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div>
    <a href="category-add" class="btn me-2" style="background-color: #4e62bb; color:white;"><i class="bi bi-plus-lg"></i>Tambah</a>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if (session('status'))
            Swal.fire({
                icon: 'success',
                text: '{{ session('status') }}',
                showCloseButton: true,
            });
        @endif
    });
</script>
<div class="my-4">
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <a href="category-edit/{{ $item->slug }}" class="btn btn-primary">Ubah</a>
                <a href="category-delete/{{ $item->slug }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection