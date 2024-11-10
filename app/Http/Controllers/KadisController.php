<?php

namespace App\Http\Controllers;

use App\Models\Kadis;
use Illuminate\Http\Request;

class KadisController extends Controller
{
    public function index()
    {
        $kadis = Kadis::find(1);
        return view('kadis.index', compact('kadis'));
    }

    public function edit(Kadis $kadis)
    {       
        return view('kadis.edit' , compact('kadis'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'pangkat' => 'required',
            'NIP' => 'required',
        ]);

        $kadis = Kadis::findOrFail(1);
        $data = $request->all();

        $kadis->update($data);

        return redirect()->route('kadis.index',)
                     ->with('success', 'Kepala Dinas berhasil diedit.');
    }
}
