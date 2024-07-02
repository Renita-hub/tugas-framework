@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Peminjaman</h1>
        <form action="{{ route('peminjaman.update', $peminjaman->id_peminjaman) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_buku">Buku</label>
                <select class="form-control" id="id_buku" name="id_buku" required>
                    @foreach ($buku as $bk)
                        <option value="{{ $bk->id_buku }}" {{ $bk->id_buku == $peminjaman->id_buku ? 'selected' : '' }}>{{ $bk->judul }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_anggota">Anggota</label>
                <select class="form-control" id="id_anggota" name="id_anggota" required>
                    @foreach ($anggota as $ang)
                        <option value="{{ $ang->id_anggota }}" {{ $ang->id_anggota == $peminjaman->id_anggota ? 'selected' : '' }}>{{ $ang->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ $peminjaman->tanggal_pinjam }}" required>
            </div>
            <div class="form-group">
                <label for="tanggal_jatuh_tempo">Tanggal Jatuh Tempo</label>
                <input type="date" class="form-control" id="tanggal_jatuh_tempo" name="tanggal_jatuh_tempo" value="{{ $peminjaman->tanggal_jatuh_tempo }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="dipinjam" {{ $peminjaman->status == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                    <option value="dikembalikan" {{ $peminjaman->status == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
