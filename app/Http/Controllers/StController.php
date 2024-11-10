<?php

namespace App\Http\Controllers;

use App\Models\St;
use Illuminate\Http\Request;

class StController extends Controller
{
    public function index()
    {
        $st = St::orderBy('id', 'desc')->get();

        return view('st.index', compact('st'));
    }

    public function create()
    {
        $lastId = St::latest('id')->pluck('id')->first();
        $newId = $lastId ? $lastId + 1 : 1;

        return view('St.create', compact ('newId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama' => 'required',
            'maksud' => 'required',
            'tujuan' => 'required',
            'lamanya' => 'required',
            'tanggal_berangkat' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'ket',
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

        St::create($data);

        return redirect()->route('st.index')->with('success', 'Surat Tugas berhasil ditambahkan.');
    }

    public function edit(St $st)
    {       
        return view('st.edit', compact('st'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama' => 'required',
            'maksud' => 'required',
            'tujuan' => 'required',
            'lamanya' => 'required',
            'tanggal_berangkat' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'ket',
            'surat' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        $st = St::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }  

        $st->update($data);

        return redirect()->route('st.index')->with('success', 'Surat Tugas berhasil diedit.');
    }

    public function surat(St $st)
    {
    return view('st.surat', compact('st'));
    }
}
