@extends('layouts.main')

@section('title', ' Tambah Kategori')

@section('content')
<h4 class="text-h4">Tambah Kategori Buku</h4>
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
        
        <div class="container">
            <form action="category-add" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="nama kategori buku">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
@endsection