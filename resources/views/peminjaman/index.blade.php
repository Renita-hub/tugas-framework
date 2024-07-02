@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Peminjaman</h1>
        <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">Tambah Peminjaman</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Buku</th>
                    <th>Anggota</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Jatuh Tempo</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $pinjam)
                    <tr>
                        <td>{{ $pinjam->buku->judul }}</td>
                        <td>{{ $pinjam->anggota->nama }}</td>
                        <td>{{ $pinjam->tanggal_pinjam }}</td>
                        <td>{{ $pinjam->tanggal_jatuh_tempo }}</td>
                        <td>{{ $pinjam->tanggal_kembali }}</td>
                        <td>{{ $pinjam->status }}</td>
                        <td>
                            <a href="{{ route('peminjaman.edit', $pinjam->id_peminjaman) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('peminjaman.destroy', $pinjam->id_peminjaman) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
