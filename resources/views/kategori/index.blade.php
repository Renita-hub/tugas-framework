@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Kategori</h1>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $kat)
                    <tr>
                        <td>{{ $kat->nama_kategori }}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $kat->id_kategori) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kategori.destroy', $kat->id_kategori) }}" method="POST" style="display:inline-block;">
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
