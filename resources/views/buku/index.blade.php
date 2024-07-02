@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Buku</h1>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $bk)
                    <tr>
                        <td>{{ $bk->judul }}</td>
                        <td>{{ $bk->penulis }}</td>
                        <td>{{ $bk->penerbit }}</td>
                        <td>{{ $bk->tahun }}</td>
                        <td>{{ $bk->kategori->nama_kategori }}</td>
                        <td>
                            <a href="{{ route('buku.edit', $bk->id_buku) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('buku.destroy', $bk->id_buku) }}" method="POST" style="display:inline-block;">
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
