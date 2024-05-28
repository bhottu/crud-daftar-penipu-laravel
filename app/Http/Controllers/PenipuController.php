<?php

// app/Http/Controllers/PenipuController.php

namespace App\Http\Controllers;

use App\Models\Penipu;
use Illuminate\Http\Request;

class PenipuController extends Controller
{
    
    
    public function index()
    {
        $penipus = \App\Models\Penipu::paginate(10); // Atur jumlah item per halaman di sini
        return view('penipus.index', compact('penipus'));
        return view('welcome', compact('penipus'));
    }

    public function create()
    {
        return view('penipus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|email|unique:penipus',
            'keterangan' => 'required',
        ]);

        Penipu::create($request->all());
        return redirect()->route('penipus.index')->with('success', 'Penipu created successfully.');
    }

    public function show(Penipu $penipu)
    {
        return view('penipus.show', compact('penipu'));
    }

    public function edit(Penipu $penipu)
    {
        return view('penipus.edit', compact('penipu'));
    }

    public function update(Request $request, Penipu $penipu)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|email|unique:penipus,email,' . $penipu->id,
            'keterangan' => 'required',
        ]);

        $penipu->update($request->all());
        return redirect()->route('penipus.index')->with('success', 'Penipu updated successfully.');
    }

    public function destroy(Penipu $penipu)
    {
        $penipu->delete();
        return redirect()->route('penipus.index')->with('success', 'Penipu deleted successfully.');
    }
}
