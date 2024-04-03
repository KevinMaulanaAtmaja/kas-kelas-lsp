@extends('layout.main')
@section('konten')
    <div class="col-sm-10 col-10 col-md-6 col-xl-6 mx-auto mt-5">
        <div class="card mt-5 d-flex">
        <form action="/siswa/store" method="POST">
            @csrf
            <div class="my-3 mx-5">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="my-3 mx-5 ">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="kelas" id="kelas" class="form-select ">
                    <option value="">Pilih Kelas</option>
                    <option value="X-RPL">X-RPL</option>
                    <option value="XI-RPL">XI-RPL</option>
                    <option value="XII-PPLG">XII-PPLG</option>
                </select>
            </div>
            <div class="mb-3 mx-5 me-0">
                <button class="btn btn-success ">Tambah Data</button>
                <a href="/siswa" class="btn btn-primary"><< Kembali</a>
            </div>
        </form>
    </div>
    </div>
@endsection
