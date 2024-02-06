@extends('layout.main')
@section('konten')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Jumlah Bayar</th>
            <th scope="col">Tanggal Bayar</th>
        </tr>
    </thead>
    <tbody>
        <a href="{{ route('pembayaran.index') }}" class="btn btn-primary mt-3"><< Kembali</a>
        @foreach ($pembayaran as $p)
            <tr>
                <td>{{ $p->siswa->nama }}</td>
                <td>Rp{{ number_format($p->jumlah_bayar, 0, ',', '.') }}</td>
                <td>{{ $p->tgl_bayar }}</td>
            </tr>
        @endforeach


        {{-- @foreach ($pembayaran as $p => $key)
            <tr>
                <td>{{ $p->siswa->nama }}</td>
                <td>Rp{{ number_format($pembayaran->jumlah_bayar, 0, ',', '.') }}</td>
                <td>{{ $pembayaran->tgl_bayar }}</td>
            </tr>
        @endforeach --}}
    </tbody>
</table>
@endsection
