<?php
namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with('buku', 'anggota')->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $buku = Buku::all();
        $anggota = Anggota::all();
        return view('peminjaman.create', compact('buku', 'anggota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_buku' => 'required|integer',
            'id_anggota' => 'required|integer',
            'tanggal_pinjam' => 'required|date',
            'tanggal_jatuh_tempo' => 'required|date',
            'status' => 'required|in:dipinjam,dikembalikan',
        ]);

        Peminjaman::create($request->all());
        return redirect()->route('peminjaman.index');
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $buku = Buku::all();
        $anggota = Anggota::all();
        return view('peminjaman.edit', compact('peminjaman', 'buku', 'anggota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_buku' => 'required|integer',
            'id_anggota' => 'required|integer',
            'tanggal_pinjam' => 'required|date',
            'tanggal_jatuh_tempo' => 'required|date',
            'status' => 'required|in:dipinjam,dikembalikan',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);

        // Update data peminjaman
        $peminjaman->update($request->only('id_buku', 'id_anggota', 'tanggal_pinjam', 'tanggal_jatuh_tempo', 'status'));

        // Jika status dikembalikan, simpan tanggal dikembalikan
        if ($request->status == 'dikembalikan') {
            $peminjaman->tanggal_kembali = now();
            $peminjaman->save();
        } else {
            $peminjaman->tanggal_kembali = null; // Pastikan tanggal dikembalikan kosong jika status bukan dikembalikan
            $peminjaman->save();
        }

        return redirect()->route('peminjaman.index');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index');
    }
}
