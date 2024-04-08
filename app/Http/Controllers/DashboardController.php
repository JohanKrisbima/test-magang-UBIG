<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index(){

        $Mahasiswa = Mahasiswa::where('jenis_kelamin', 'Laki-Laki')->count();
        $Mahasiswi = Mahasiswa::where('jenis_kelamin', 'Perempuan')->count();
        $jmlhMahasiswa = $Mahasiswa + $Mahasiswi;

        $siswaPerJenisKelamin = Mahasiswa::select('jenis_kelamin', DB::raw('COUNT(*) as total'))
        ->groupBy('jenis_kelamin')
        ->get();

        $siswaPerKota = Mahasiswa::select('kota', DB::raw('COUNT(*) as total'))
        ->groupBy('kota')
        ->get();

        $siswaPerTahun = Mahasiswa::select(DB::raw('YEAR(tgl_lahir) AS tahun'), DB::raw('COUNT(*) AS total'))
        ->groupBy(DB::raw('YEAR(tgl_lahir)'))
        ->orderBy(DB::raw('YEAR(tgl_lahir)'))
        ->get();


        $jenisKelaminLabels = $siswaPerJenisKelamin->pluck('jenis_kelamin');
        $jumlahSiswa = $siswaPerJenisKelamin->pluck('total');

        $kotaLabels = $siswaPerKota->pluck('kota');
        $jumlahSiswaPerkota = $siswaPerKota->pluck('total');

        $tahunLabels = $siswaPerTahun->pluck('tahun');
        $jumlahSiswaPertahun = $siswaPerTahun->pluck('total');
    
        return view('dashboard.index',[
            'title' => 'Dashboard',
            'Mahasiswa' => $Mahasiswa,
            'Mahasiswi' => $Mahasiswi,
            'jmlhMahasiswa' => $jmlhMahasiswa,
            'jenisKelaminLabels' => $jenisKelaminLabels,
            'jumlahSiswa' => $jumlahSiswa,
            'kotaLabels' => $kotaLabels,
            'jumlahSiswaPerkota' => $jumlahSiswaPerkota,
            'tahunLabels' => $tahunLabels,
            'jumlahSiswaPertahun' => $jumlahSiswaPertahun,
        ]);
    }
}
