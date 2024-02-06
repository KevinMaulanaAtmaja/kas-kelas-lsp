<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = Pembayaran::selectRaw('id_siswa, SUM(jumlah_bayar) as total_bayar, MAX(tgl_bayar) as tgl_bayar, MAX(id) as id')->groupBy('id_siswa')->orderBy('tgl_bayar', 'desc')->get();
        // dd($pembayaran);
        return view('pembayaran.index', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $namaSiswa = Siswa::all();
        // dd($namaSiswa);
        return view('pembayaran.create', compact('namaSiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required',
            'tgl_bayar' => 'required',
            'jumlah_bayar' => 'required|numeric'
        ]);

        Pembayaran::create([
            'id_siswa' => $request->id_siswa,
            'tgl_bayar' => $request->tgl_bayar,
            'jumlah_bayar' => $request->jumlah_bayar
        ]);

        return redirect('/pembayaran')->with('success', 'Berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id_siswa)
    {
        // dd($id_siswa);
        $pembayaran = Pembayaran::with('siswa')->where('id_siswa', $id_siswa)->get();

        // dd($pembayaran);
        if (!$pembayaran) {
            abort(404);
        }

        // Akses relasi siswa melalui model Pembayaran
        // $siswa = $pembayaran->siswa;

        // // Akses properti siswa
        // $namaSiswa = $siswa->nama;

        // dd($namaSiswa);

        return view('pembayaran.detail', compact('pembayaran'));
    }






    // public function show($id)
    // {
    //     $pembayaran = Pembayaran::with('siswa')->where('id', $id)->first();

    //     if (!$pembayaran) {
    //         abort(404);
    //     }

    //     // Akses relasi siswa melalui model Pembayaran
    //     $siswa = $pembayaran->siswa;

    //     // Akses properti siswa
    //     $namaSiswa = $siswa->nama;

    //     // dd($namaSiswa);

    //     return view('pembayaran.detail', compact('pembayaran', 'namaSiswa'));
    // }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        $namaSiswa = Siswa::all();
        $siswa = Siswa::find($id);
        // dd($namaSiswa);

        return view('pembayaran.edit', compact('pembayaran', 'namaSiswa', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_siswa' => 'required',
            'tgl_bayar' => 'required',
            'jumlah_bayar' => 'required|numeric'
        ]);
        $pembayaran = Pembayaran::findOrFail($id);

        $pembayaran->update([
            'id_siswa' => $request->id_siswa,
            'tgl_bayar' => $request->tgl_bayar,
            'jumlah_bayar' => $request->jumlah_bayar
        ]);


        return redirect('/pembayaran')->with('success', 'Berhasil update data Pembayaran!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Pembayaran::find($id);
        // dd($p);
        $p->delete();
        return redirect('/pembayaran')->with('success', 'Berhasil dihapus!');
    }
}
