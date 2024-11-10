<?php

namespace App\Http\Controllers;

use App\Models\Spj;
use Illuminate\Http\Request;

class SpjController extends Controller
{
    public function index()
    {
        $spj = Spj::orderBy('id', 'desc')->get();

        return view('spj.index', compact('spj'));
    }

    public function create()
    {
        $lastId = Spj::latest('id')->pluck('id')->first();
        $newId = $lastId ? $lastId + 1 : 1;

        return view('Spj.create', compact('newId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_kegiatan' => 'required',
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

        Spj::create($data);

        return redirect()->route('spj.index')->with('success', 'SPJ UMPEG berhasil ditambahkan.');
    }

    public function edit(Spj $spj)
    {       
        return view('spj.edit', compact('spj'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_kegiatan' => 'required',
            'surat' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        $spj = Spj::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }  

        $spj->update($data);

        return redirect()->route('spj.index')->with('success', 'SPJ UMPEG berhasil diedit.');
    }

    public function surat(Spj $spj)
    {
    return view('spj.surat', compact('spj'));
    }
}
