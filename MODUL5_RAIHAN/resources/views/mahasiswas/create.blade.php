<!-- resources/views/mahasiswas/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Tambah Mahasiswa</h2>
    
    <form action="{{ route('mahasiswas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
            <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <div class="mb-3">
            <label for="dosen_id" class="form-label">Dosen Wali</label>
            <select class="form-select" id="dosen_id" name="dosen_id" required>
                <option value="">Pilih Dosen</option>
                @foreach($dosens as $item)
                <option value="{{ $item->id }}">{{ $item->nama_dosen }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection