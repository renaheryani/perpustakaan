@extends('layouts.main')

@section('title', 'Pengguna')

@section('content')
<h2 style="text-align: center;">Daftar Pengguna Perpustakaan</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div>
    <a href="/registed-users" class="btn" style="background-color: #4e62bb; color:white;"><i class="bi bi-check"></i>User Baru</a>
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
            <th>Username</th>
            <th>No.Telepon</th>
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
            <td>{{ $item->status }}</td>
            <td>
                <a href="/user-detail/{{ $item->slug }}" class="btn btn-primary">Detail</a>
                <a href="/user-ban/{{ $item->slug }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection