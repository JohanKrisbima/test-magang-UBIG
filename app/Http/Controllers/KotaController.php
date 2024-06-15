<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
 
    public function index()
    {
        //
        $kota = Kota::all();

        return(view('kota.index',[
            'title' => 'Data Kota',
            'kota' => $kota
        ])
    );
    }

    public function addData()
    {
        return view('kota.addData',[
            'title' => 'Data Kota'
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'kota' => 'required',
            // Tambahkan validasi untuk field lainnya
        ]);

        Kota::create($data);

        return redirect('/kota')->with('success', 'Data Kota Berhasil ditambahkan');
    }


    public function updateKota($id)
    {
        $kota = Kota::find($id);

        return view('kota.update',[
            'title' => 'Data Kota',
            'kota' => $kota
        ]);
    }

    public function update(Request $request, $id)
    {
        $kota = Kota::find($id);
        
        // $kota->id = $request->id;
        $kota->kota = $request->kota;
       

        
        $kota->update();

        return redirect('/kota')->with('successUpdate', 'Data Kota berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kota = Kota::find($id);

        $kota->delete();

        return redirect('/kota')->with('succesDelete', 'Delete Data Kota Berhasil');
    }
}
