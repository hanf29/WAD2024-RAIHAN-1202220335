@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Dosen</h2>

    <form action="{{ route('dosens.update', $dosens->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <div class="form-group">
            <label for="kode_dosen">Kode Dosen</label>
            <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" value="{{ old('kode_dosen', $dosens->kode_dosen) }}" required>
            @error('kode_dosen')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nama_dosen">Nama Dosen</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="{{ old('nama_dosen', $dosens->nama_dosen) }}" required>
            @error('nama_dosen')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip', $dosens->nip) }}" required>
            @error('nip')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $dosens->email) }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="no_telepon">No Telepon</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ old('no_telepon', $dosens->no_telepon) }}">
            @error('no_telepon')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('dosens.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection