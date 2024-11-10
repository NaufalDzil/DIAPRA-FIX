<?php

namespace App\Http\Controllers;

use App\Models\Sisipan;
use Illuminate\Http\Request;

class SisipanController extends Controller
{
    public function index()
    {
        $sisipan = Sisipan::orderBy('id', 'desc')->get();

        return view('sisipan.index', compact('sisipan'));
    }

    public function create()
    {
        return view('sisipan.create');
    }

    public function store(Request $request){
        $request->validate([
            'no' => 'required|unique:sisipans,no',
            'alamat' => 'required',
            'tanggal_surat' => 'required|date',
            'nomor_surat' => 'required|unique:sisipans,nomor_surat',
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

        Sisipan::create($data);

        return redirect()->route('sisipan.index')->with('success', 'Sisipan Surat Keluar berhasil ditambahkan.');
    }

    public function edit(Sisipan $sisipan)
    {       
        return view('sisipan.edit', compact('sisipan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no' => 'required|unique:sisipans,no',
            'alamat' => 'required',
            'tanggal_surat' => 'required|date',
            'nomor_surat' => 'required|unique:sisipans,nomor_surat',
            'perihal' => 'required',
            'surat' => 'nullable|file|mimes:pdf|max:10240'

        ]);

        $sisipan = Sisipan::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }  

        $sisipan->update($data);

        return redirect()->route('sisipan.index')->with('success', 'Sisipan Surat Keluar berhasil diedit.');
    }

    public function surat(Sisipan $sisipan)
    {
    return view('sisipan.surat', compact('sisipan'));
    }
}
