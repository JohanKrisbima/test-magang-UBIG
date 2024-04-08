@extends('layouts.tamplates')

@section('content')

<div id="content">
    @include('layouts.navbarTop')
{{-- 
@if(session()->has('error'))

<script>alert('{{ session('error') }}')</script>
                
@endif --}}

@if($errors->any())
    @foreach ($errors->all() as $error)
        <script>alert('{{ $error }}')</script>
    @endforeach
@endif

   
    <form action="/createMahasiswa" method="POST">
        @csrf
        <div class="d-grid gap-1 col-6 mx-auto mb-5">
            <h1 class="d-flex justify-content-center mb-4">Tambah Data Mahasiswa</h1>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
              </div>
              <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select id="jenis_kelamin" class="form-select" name="jenis_kelamin" required>
                  <option value="Laki-laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
              </div>
              <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <select id="kota" class="form-select" name="kota" required>
                    @foreach($kota as $distrik)
                        <option value="{{ $distrik->kota }}">{{ $distrik->kota }}</option>
                    @endforeach
                </select>
              </div>
              <button type="submit" class="btn btn-primary mb-5" style="width: 80px">Simpan</button>
        </div>
        
      </form>
   
</div>


@endsection