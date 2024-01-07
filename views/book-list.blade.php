@extends('layouts.main')

@section('title', 'Daftar Buku')

@section('content')
<h2 style="text-align: center;">Daftar Buku</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div class="my-5">
    <div class="row">

        @foreach ($books as $item)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
            <div class="card">
                <img src="{{ asset('storage/cover/'.$item->cover) }}" class="card-img-top" alt="Buku 1" width="100" height="200" draggable="false">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->book_code }}</h5>
                    <p class="card-text">{{ $item->title }}</p>
                    <p class="card-text text-end fw-bold {{ $item->status == 'in stock' ? 'text-succes' : 'text-danger' }} ">
                        {{ $item->status }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection