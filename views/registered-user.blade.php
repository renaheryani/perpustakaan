@extends('layouts.main')

@section('title', 'Pengguna')

@section('content')
<h2>Daftar Pengguna Baru</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div>
    <a href="/users" class="btn" style="background-color: #4e62bb; color:white;"><i class="bi bi-check"></i>Pengguna Terdaftar</a>
</div>
<div class="my-4">
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>No.Telepon</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registeredUsers as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->username  }}</td>
                <td>{{ $item->phone  }}</td>
                <td>
                    <a href="/user-detail/{{ $item->slug }}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection