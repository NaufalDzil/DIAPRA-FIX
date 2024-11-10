<?php

namespace App\Http\Controllers;

use App\Models\Sk;
use Illuminate\Http\Request;

class SkController extends Controller
{
    public function index()
    {
        $sk = Sk::orderBy('id', 'desc')->get();

        return view('sk.index', compact('sk'));
    }

    public function create()
    {
        $lastId = Sk::latest('id')->pluck('id')->first();
        $newId = $lastId ? $lastId + 1 : 1;

        return view('sk.create', compact ('newId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
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

        Sk::create($data);

        return redirect()->route('sk.index')->with('success', 'SK berhasil ditambahkan.');
    }

    public function edit(Sk $sk)
    {       
        return view('sk.edit', compact('sk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'perihal' => 'required',
            'surat' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        $sk = Sk::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }  

        $sk->update($data);

        return redirect()->route('sk.index')->with('success', 'SK berhasil diedit.');
    }
    
    public function surat(Sk $sk)
    {
    return view('sk.surat', compact('sk'));
    }
}
