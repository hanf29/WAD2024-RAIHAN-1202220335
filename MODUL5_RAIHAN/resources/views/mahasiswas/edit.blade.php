@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Mahasiswa</h2>

    <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" required>
            @error('nim')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nama_mahasiswa">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}" required>
            @error('nama_mahasiswa')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $mahasiswa->email) }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}" required>
            @error('jurusan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="dosen_id">Dosen</label>
            <select class="form-control" id="dosen_id" name="dosen_id" required>
                <option value="">Pilih Dosen</option>
                @foreach($dosens as $dosens)
                    <option value="{{ $dosens->id }}" {{ old('dosen_id', $mahasiswa->dosen_id) == $dosens->id ? 'selected' : '' }}>
                        {{ $dosens->nama_dosen }}
                    </option>
                @endforeach
            </select>
            @error('dosen_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection