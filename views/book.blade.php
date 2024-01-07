@extends('layouts.main')

@section('title', 'Buku')

@section('content')
<h2 style="text-align: center;">Daftar Buku</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div>
    <a href="book-add" class="btn" style="background-color: #4e62bb; color:white;"><i class="bi bi-plus-lg"></i>Tambah</a>
</div>
<div class="my-4">

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

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->book_code }}</td>
            <td>{{ $item->title }}</td>
            <td>
                @foreach ($item->categories as $category)
                    {{ $category->name }} <br>
                @endforeach
            </td>
            <td>{{ $item->status }}</td>
            <td>
                <a href="/book-edit/{{ $item->slug }}" class="btn btn-primary">Ubah</a>
                <a href="/book-delete/{{ $item->slug }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection