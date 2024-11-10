<?php

namespace App\Http\Controllers;

use App\Models\Mou;
use Illuminate\Http\Request;

class MouController extends Controller
{
    public function index()
    {
        $mou = Mou::orderBy('id', 'desc')->get();

        return view('mou.index', compact('mou'));
    }

    public function create()
    {
        $lastId = Mou::latest('id')->pluck('id')->first();
        $newId = $lastId ? $lastId + 1 : 1;

        return view('mou.create', compact ('newId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal' => 'required|date',
            'nominal',
            'nama',
            'pptk',
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

        Mou::create($data);

        return redirect()->route('mou.index')->with('success', 'Kontrak/MoU berhasil ditambahkan.');
    }

    public function edit(Mou $mou)
    {       
        return view('mou.edit', compact('mou'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal' => 'required|date',
            'nominal',
            'nama',
            'pptk',
            'surat' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        $mou = Mou::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }  

        $mou->update($data);

        return redirect()->route('mou.index')->with('success', 'Kontrak/MoU berhasil diedit.');
    }

    public function surat(Mou $mou)
    {
    return view('mou.surat', compact('mou'));
    }
}
