@extends('layouts.main')

@section('title', ' Tambah Buku')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<h4 class="text-h4">Tambah Buku</h4>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
    <div class="w-50">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li> 
            @endforeach
            </ul>
        </div>
    @endif

        <div class="container ">
            <form action="book-add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="book_code" class="form-label">Kode Buku</label>
                    <input type="text" name="book_code" id="book_code" class="form-control" placeholder="masukan kode buku" value="{{ old('book_code') }}">
                </div>
                <br>
                <div class="form-group">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="masukan judul buku" value="{{ old('title') }}">
                </div>
                <br>
                <div class="form-group">
                    <label for="title" class="form-label">Kategori Buku</label>
                    <select name="categories[]" id="category" class="form-control select-multiple">
                        @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="masukan cover buku">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.select-multiple').select2();
});
</script>

@endsection