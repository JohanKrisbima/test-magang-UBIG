<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kota;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        
        return view('mahasiswa.index',[
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function addData(){

        $kota = Kota::all();

        return view('mahasiswa.addData',[
            'title' => 'Data Mahasiswa',
            'kota' => $kota
        ]);
    }

    public function create(Request $request)
    {
        //
        $data = $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            // Tambahkan validasi untuk field lainnya
        ]);

        Mahasiswa::create($data);

        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil ditambahkan');
        
    // try {
    //     Mahasiswa::create($data);
    //     return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil ditambahkan');
    // } catch (\Exception $e) {
    //     return redirect()->back()->withErrors(['failed' => 'Data gagal ditambahkan.']);
    // }
    }

  
    public function updateMahasiswa($id)
    {
        $mhs = Mahasiswa::find($id);

        $kota = Kota::all();

        return view('mahasiswa.update',[
            'title' => 'Data Mahasiswa',
            'mhs' => $mhs,
            'kota' => $kota
        ]);
    }

    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);

        // $mahasiswa->id = $request->id;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tgl_lahir = $request->tgl_lahir;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->kota = $request->kota;

        
        $mahasiswa->update();

        return redirect('/mahasiswa')->with('successUpdate', 'Data Mahasiswa berhasil diperbarui.');
    }
    

    public function destroy($id)
    {
        $mhs = Mahasiswa::find($id);

        $mhs->delete();

        return redirect('/mahasiswa')->with('succesDelete', 'Delete Data Mahasiswa Berhasil');
    }

    public function search(Request $request){
        if($request->has('search')){
            $mahasiswa = Mahasiswa::where('nim', 'LIKE', '%' .$request->search. '%')->get();

            if ($mahasiswa->isEmpty()) {
                // Jika tidak ditemukan hasil pencarian, redirect ke '/mahasiswa'
                $mahasiswa = Mahasiswa::all();
                return view('mahasiswa.index', [
                    'title' => 'Data Mahasiswa',
                    'mahasiswa' => $mahasiswa,
                    'dontSearch' => 'Data Mahasiswa Tidak Ditemukan'
                ]);               
            }

            return view('mahasiswa.index',[
                'title' => 'Data Mahasiswa',
                'mahasiswa' => $mahasiswa
            ]);
        }
        else{
            $mahasiswa = Mahasiswa::all();

            return view('mahasiswa.index',[
                'title' => 'Data Mahasiswa',
                'mahasiswa' => $mahasiswa
            ]);
        }
        
    }
}
