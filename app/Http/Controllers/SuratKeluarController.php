<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratkeluar = SuratKeluar::orderBy('id', 'desc')->get();

        return view('suratkeluar.index', compact('suratkeluar'));
    }

    public function create()
    {
        $lastId = SuratKeluar::latest('id')->pluck('id')->first();
        $newId = $lastId ? $lastId + 1 : 1;

        return view('suratkeluar.create', compact('newId'));
    }

    public function store(Request $request){
        $request->validate([
            'alamat' => 'required',
            'tanggal_surat' => 'required|date',
            'nomor_surat' => 'required|unique:surat_keluars,nomor_surat',
            'perihal' => 'required',
            'surat' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }        

        SuratKeluar::create($data);

        return redirect()->route('suratkeluar.index')->with('success', 'Surat Keluar berhasil ditambahkan.');
    }

    public function edit(SuratKeluar $suratkeluar)
    {       
        return view('suratkeluar.edit', compact('suratkeluar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'alamat' => 'required',
            'tanggal_surat' => 'required|date',
            'nomor_surat' => 'required|unique:surat_keluars,nomor_surat',
            'perihal' => 'required',
            'surat' => 'nullable|file|mimes:pdf|max:10240'

        ]);

        $suratkeluar = SuratKeluar::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }  

        $suratkeluar->update($data);

        return redirect()->route('suratkeluar.index')->with('success', 'Surat Keluar berhasil diedit.');
    }

    public function surat(SuratKeluar $suratkeluar)
    {
    return view('suratkeluar.surat', compact('suratkeluar'));
    }
}
