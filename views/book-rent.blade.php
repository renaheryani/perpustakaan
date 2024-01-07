@extends('layouts.main')

@section('title', 'Pinjam Buku')

@section('content')
<h2 style="text-align: center">Daftar Pinjam Buku</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if (session('message'))
            Swal.fire({
                icon: 'success',
                text: '{{ session('alert-class') }}',
                showCloseButton: true,
            });
        @endif
    });
</script>

<div class="container col-12 col-md-6 ">
    <form action="book-rent" method="post" >
        @csrf
        <div class="mb-3">
            <label for="user" class="form-label">Pengguna</label>
            <select type="text" name="user_id" id="user" class="form-control">
                <option value="">Pilih Pengguna</option>
                @foreach ($users as $item)
                <option value="{{ $item->id }}">{{ $item->username }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="book" class="form-label">Judul Buku</label>
            <select type="text" name="book_id" id="book" class="form-control">
                <option value="">Pilih Buku</option>
                @foreach ($books as $item)
                <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
@endsection