<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosens.index', compact('dosens'));
    }

    public function getCreateForm()
    {
        return view('dosens.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'kode_dosen' => 'required|unique:dosens,kode_dosen',
            'nama_dosen' => 'required',
            'nip' => 'required|unique:dosens,nip',
            'email' => 'required|unique:dosens,email',
            'no_telepon' => 'nullable',
        ]);

        
        Dosen::create($request->all());

        return redirect()->route('dosens.index');
    }

    public function show($id)
    {
        $dosens = Dosen::findOrFail($id); 
        return view('dosens.show', compact('dosens'));
    }

    public function getEditForm($id)
    {
        $dosens = Dosen::findOrFail($id); 
        return view('dosens.edit', compact('dosens'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_dosen' => 'required|unique:dosens,kode_dosen,' . $id,
            'nama_dosen' => 'required',
            'nip' => 'required|unique:dosens,nip,' . $id,
            'email' => 'required|unique:dosens,email,' . $id,
            'no_telepon' => 'nullable',
        ]);

        $dosens = Dosen::findOrFail($id);
        $dosens->update($request->all()); 

        return redirect()->route('dosens.index');
    }

    public function destroy($id)
    {
        $dosens = Dosen::findOrFail($id);
        $dosens->delete(); // 

        return redirect()->route('dosens.index');
    }
}
