@extends('layouts.main')

@section('title', 'Pengguna')

@section('content')
<h2 style="text-align: center;">Detail Pengguna</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div>
    @if ($user->status =='inactive')
        <a href="/user-approve/{{ $user->slug }}" class="btn" style="background-color: #4e62bb; color:white;">
        <i class="bi bi-check"></i>Aktifkan</a>
    @endif
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
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Username</h5>
                <input type="text" readonly value="{{ $user->username }}">
    
                <h5 class="card-title">No.Telepon</h5>
                <input type="text" readonly value="{{ $user->phone }}">

                <h5 class="card-title">Alamat</h5>
                <input type="text" readonly value="{{ $user->alamat }}">

                <h5 class="card-title">Status</h5>
                <input type="text" readonly value="{{ $user->status }}">
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h4 style="text-align: center;">Daftar Peminjaman Buku Pengguna</h4>
        <br>
        <x-rent-log-table :rentlog='$rent_logs' />
    </div>
</div>
@endsection