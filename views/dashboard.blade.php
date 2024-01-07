@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    {{-- <h4>Selamat datang, {{ Auth::user()->username }}!</h4> --}}
    <p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-data buku">
                <div class="row">
                    <div class="col-6"><i class="bi bi-book"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Buku</div>
                        <div class="card-count">{{ $book_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-data kategori">
                <div class="row">
                    <div class="col-6"><i class="bi bi-bookmarks"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Kategori</div>
                        <div class="card-count">{{ $category_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-data pengguna">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Pengguna</div>
                        <div class="card-count">{{ $user_count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h2 style="text-align: center;">Daftar Buku Perpustakaan</h2>
    <div class="my-4">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>buku-001</td>
                <td>Tingkerbel</td>
                <td>fiksi</td>
                <td>not available</td>
            </tr>
            <tr>
                <td>2</td>
                <td>buku-002</td>
                <td>Siksa Kubur</td>
                <td>thriller</td>
                <td>in stock</td>
            </tr>
            <tr>
                <td>3</td>
                <td>buku-003</td>
                <td>Sejarah Komunis</td>
                <td>thriller</td>
                <td>not available</td>
            </tr>
            <tr>
                <td>4</td>
                <td>buku-004</td>
                <td>Romeo dan junedi</td>
                <td>romance</td>
                <td>in stock</td>
            </tr>
        </tbody>
    </table>
@endsection