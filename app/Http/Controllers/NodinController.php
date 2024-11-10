<?php

namespace App\Http\Controllers;

use App\Models\Nodin;
use Illuminate\Http\Request;

class NodinController extends Controller
{
    public function index()
    {
        $nodin = Nodin::orderBy('id', 'desc')->get();

        return view('nodin.index', compact('nodin'));
    }
  
    public function create()
    {
        $lastId = Nodin::latest('id')->pluck('id')->first();
        $newId = $lastId ? $lastId + 1 : 1;

        return view('Nodin.create', compact('newId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_penomoran' => 'required|date',
            'alamat' => 'required',
            'tanggal_surat' => 'required|date',
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

        Nodin::create($data);

        return redirect()->route('nodin.index')->with('success', 'Nota Dinas berhasil ditambahkan.');
    }

    public function edit(Nodin $nodin)
    {       
        return view('nodin.edit', compact('nodin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_penomoran' => 'required|date',
            'alamat' => 'required',
            'tanggal_surat' => 'required|date',
            'perihal' => 'required',
            'surat' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        $nodin = Nodin::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }  

        $nodin->update($data);

        return redirect()->route('nodin.index')->with('success', 'SPJ UMPEG berhasil diedit.');
    }

    public function surat(Nodin $nodin)
    {
    return view('nodin.surat', compact('nodin'));
    }
}
