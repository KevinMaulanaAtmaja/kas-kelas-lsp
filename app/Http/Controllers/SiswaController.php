<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::latest()->paginate(4);
        // dd($siswa);
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'kelas' => 'required'
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ]);

        return redirect('/siswa')->with('success', 'Berhasil menambah data');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        // dd($siswa);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'kelas' => 'required'
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas
        ]);

        return redirect('/siswa')->with('success', 'Berhasil update data Siswa!');
    }

    public function delete($id){
        $siswa = Siswa::find($id);
        if ($siswa) {
            $p = Pembayaran::where('id_siswa', $siswa->id)->exists();
            // dd($p);
            if ($p) {
                return redirect('/siswa')->with('error', 'Data siswa masih dipakai dan tidak dapat dihapus!');
            }

            $siswa->delete();
            return redirect('siswa')->with('success', 'Berhasil hapus data!');
        }
    }
}
