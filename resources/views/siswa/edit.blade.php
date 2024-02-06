@extends('layout.main')
@section('konten')
<div class="col-sm-10 col-10 col-md-6 col-xl-6 mx-auto  mt-5 ">
    <div class="card mt-5 d-flex">
    <form action="{{ route('update', $siswa->id) }}" method="POST">
        @csrf
        <div class="my-3 mx-5">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $siswa->nama }}">
        </div>
        <div class="my-3 mx-5">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="kelas" id="kelas" class="form-select ">
                <option value="X-RPL" {{ $siswa->kelas == 'X-RPL' ? 'selected' : '' }}>X-RPL</option>
                <option value="XI-RPL" {{ $siswa->kelas == 'XI-RPL' ? 'selected' : '' }}>XI-RPL</option>
                <option value="XII-PPLG" {{ $siswa->kelas == 'XII-PPLG' ? 'selected' : '' }}>XII-PPLG</option>
            </select>
        </div>
        <div class="mb-3 mx-5 me-0">
            <button class="btn btn-success ">Update Data</button>
        </div>
    </form>
</div>
</div>
@endsection
