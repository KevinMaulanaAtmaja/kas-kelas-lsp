@extends('layout.main')
@section('konten')
<h1 class="text-info">Pembayaran</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Total Bayar</th>
            <th scope="col">Tanggal Bayar</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- <a href="{{ 'siswa' }}" class="btn btn-primary mt-3">+ Siswa</a> --}}
        <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mt-3">+ Tambah Pembayaran</a>
        @foreach ($pembayaran as $key => $p)
            <tr>
                <td>{{ $p->siswa->nama }}</td>
                <td>Rp{{ number_format($p->total_bayar, 0, ',', '.') }}</td>
                <td>{{ $p->tgl_bayar }}</td>
                <td>
                    <!-- Edit -->
                    {{-- <a href="{{ route('pembayaran.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                    <a href="pembayaran/{{ $p->id_siswa }}/detail" class="btn btn-info btn-sm">Detail</a>

                    <!-- Hapus -->
                    {{-- <form action="{{ route('pembayaran.destroy', $p->id) }}" method="POST" class="d-inline ">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                    </form> --}}

                    {{-- <!-- Update -->
                    <form action="{{ route('pembayaran.update', $p->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PATCH') <!-- atau @method('PUT') -->
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
