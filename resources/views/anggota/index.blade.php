@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Anggota</h1>
        <a href="{{ route('anggota.create') }}" class="btn btn-primary">Tambah Anggota</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $ang)
                    <tr>
                        <td>{{ $ang->nama }}</td>
                        <td>{{ $ang->nim }}</td>
                        <td>{{ $ang->prodi }}</td>
                        <td>
                            <a href="{{ route('anggota.edit', $ang->id_anggota) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('anggota.destroy', $ang->id_anggota) }}" method="POST" style="display:inline-block;">
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
