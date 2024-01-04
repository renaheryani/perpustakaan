@extends('layouts.main')

@section('title', ' Tambah Buku')

@section('content')
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
                    <input type="text" name="book_code" id="book_code" class="form-control" placeholder="masukan kode buku">
                </div>
                <br>
                <div class="form-group">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="masukan judul buku">
                </div>
                <br>
                <div class="form-group">
                    <label for="cover" class="form-label">Cover</label>
                    <input type="file" name="cover" id="cover" class="form-control" placeholder="masukan cover buku">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
@endsection