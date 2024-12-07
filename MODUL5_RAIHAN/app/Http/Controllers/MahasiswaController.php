<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all(); 
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function getCreateForm()
    {
        $dosens = Dosen::all();
        return view('mahasiswas.create', compact('dosens'));
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama_mahasiswa' => 'required',
            'email' => 'required|unique:mahasiswas,email',
            'jurusan' => 'required',
            'dosen_id' => 'required|exists:dosens,id',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswas.index');
    }

    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    public function getEditForm($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $dosens = Dosen::all();
        return view('mahasiswas.edit', compact('mahasiswa', 'dosens'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $id,
            'nama_mahasiswa' => 'required',
            'email' => 'required|unique:mahasiswas,email,' . $id,
            'jurusan' => 'required',
            'dosen_id' => 'required|exists:dosens,id', 
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all()); 

        return redirect()->route('mahasiswas.index');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete(); 

        return redirect()->route('mahasiswas.index');
    }
}
