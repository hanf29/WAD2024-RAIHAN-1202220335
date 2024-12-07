<!-- resources/views/dosen/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Daftar Dosen</h2>
    
    <a href="{{ route('dosens.create') }}" class="btn btn-primary mb-3">Tambah Dosen</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Dosen</th>
                <th>Nama Dosen</th>
                <th>NIP</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $item)
            <tr>
                <td>{{ $item->kode_dosen }}</td>
                <td>{{ $item->nama_dosen }}</td>
                <td>{{ $item->nip }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->no_telepon }}</td>
                <td>
                    <a href="{{ route('dosens.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dosens.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection