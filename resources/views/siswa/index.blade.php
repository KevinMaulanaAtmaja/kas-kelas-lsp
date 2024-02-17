<!-- resources/views/siswa/index.blade.php -->

@extends('layout.main')
@section('konten')
    <h1 class="text-primary">Semua Siswa</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <a href="{{ 'siswa/create' }}" class="btn btn-primary mt-3">+ Tambah Siswa</a>
            {{-- <a href="{{ 'pembayaran' }}" class="btn btn-primary mt-3 mx-3">+ Pembayaran</a> --}}
            @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kelas }}</td>
                    <td>
                        <form action="">
                            <a href="{{ 'siswa/'. $s->id .'/edit' }}" class="btn btn-warning btn-sm">Edit</a>
                            <a onclick="return confirm('apa yakin?')" href="{{ 'siswa/'. $s->id .'/delete' }}" class="btn btn-danger btn-sm">Hapus
                            </a></form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $siswa->links() }}
@endsection
