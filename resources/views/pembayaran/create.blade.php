@extends('layout.main')
@section('konten')
<div class="col-sm-10 col-10 col-md-6 col-xl-6 mx-auto mt-5">
    <div class="card mt-5 d-flex">
    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf
        <div class="my-3 mx-5">
            <label for="id_siswa" class="form-label">Nama Siswa</label>
            <select name="id_siswa" id="id_siswa" class="form-select">
                <option value="">Pilih Siswa</option>
                @foreach ($namaSiswa as $s)
                    <option value="{{ $s->id }}">{{ $s->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="my-3 mx-5">
            <label for="tgl_bayar" class="form-label">Tanggal Bayar</label>
            <input type="date" class="form-control" name="tgl_bayar" id="tgl_bayar">
        </div>

        <div class="my-3 mx-5">
            <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
            <select class="form-select" name="jumlah_bayar" id="jumlah_bayar">
                <option value="">Pilih Nominal</option>
                <option value="5000">5 RB</option>
                <option value="10000">10 RB</option>
                <option value="15000">15 RB</option>
            </select>
        </div>
        {{-- <div class="my-3 mx-5">
            <label for="isi_sendiri" class="form-label d-block " id="label">Isi Sendiri</label>
            <input type="number" name="jumlah_bayar"  id="isi_sendiri" class="form-control d-none">
        </div> --}}
        <div class="mb-3 mx-5">
            <button class="btn btn-success">Tambah Data</button>
        </div>
    </form>
</div>
</div>
@endsection

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
        const label = document.getElementById('label');
        const input = document.querySelector('#isi_sendiri');

        label.addEventListener('click', function () {
            input.classList.remove('d-none');
        });
    });


    </script> --}}
