@extends('layouts.main')

@section('title', ' Hapus Pengguna')
0
@section('content')
<div class="hapus justify-content-center text-center border p-4">
    <h4>Apakah anda yakin akan menghapus data pengguna? {{ $user->username }}</h4>
    <p style="color: #fafafa; font-size: 10px;">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.
    </p>
    <div class="w-100 d-flex justify-content-center mt-3">
        <a href="/user-destroy/{{ $user->slug }}" class="btn btn-danger me-5">Hapus</a>
        <a href="/users" class="btn btn-primary me-5">Batal</a>
    </div>
</div>
@endsection