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

    <div class="mt-5">
        <h5>log peminjaman</h5>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pengguna</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Harus Kembali</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            <Tbody>
                <tr>
                    <td colspan="7" style="text-align: center">No data</td>
                </tr>
            </Tbody>
        </table>
    </div>
@endsection