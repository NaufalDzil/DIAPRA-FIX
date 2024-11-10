<?php

namespace App\Http\Controllers;

use App\Models\Sppd;
use Illuminate\Http\Request;

class SppdController extends Controller
{
    public function index()
    {
        $sppd = Sppd::orderBy('id', 'desc')->get();

        return view('sppd.index', compact('sppd'));
    }

    public function create()
    {
        $lastId = Sppd::latest('id')->pluck('id')->first();
        $newId = $lastId ? $lastId + 1 : 1;

        return view('Sppd.create', compact ('newId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'maksud' => 'required',
            'tujuan' => 'required',
            'tanggal_berangkat' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'ket'=>'nullable',
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

        Sppd::create($data);

        return redirect()->route('sppd.index')->with('success', 'SPPD berhasil ditambahkan.');
    }

    public function edit(Sppd $sppd)
    {       
        return view('sppd.edit', compact('sppd'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'maksud' => 'required',
            'tujuan' => 'required',
            'tanggal_berangkat' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'ket'=>'nullable',
            'surat' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        $sppd = Sppd::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }  

        $sppd->update($data);

        return redirect()->route('sppd.index')->with('success', 'SPPD berhasil diedit.');
    }

    public function surat(Sppd $sppd)
    {
    return view('sppd.surat', compact('sppd'));
    }
}
