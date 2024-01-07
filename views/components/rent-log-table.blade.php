<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Pengguna</th>
                <th>Judul Buku</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Harus Kembali</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentlog as $item)
            <tr class="{{ $item->actual_return_date == null ? '' :($item->return_date < $item->actual_return_date) }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->username }}</td>
                <td>{{ $item->book->title }}</td>
                <td>{{ $item->rent_date }}</td>
                <td>{{ $item->return_date }}</td>
                <td>{{ $item->actual_return_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>