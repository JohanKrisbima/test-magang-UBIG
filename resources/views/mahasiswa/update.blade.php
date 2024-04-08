@extends('layouts.tamplates')

@section('content')

<div id="content">
    @include('layouts.navbarTop')

    <form action="/updateMahasiswa/{{ $mhs->id }}" method="POST">
        @csrf
        <div class="d-grid gap-1 col-6 mx-auto mb-5">
              <h1 class="d-flex justify-content-center mb-4">Update Data Mahasiswa</h1>
              {{-- <div class="mb-3">
                
                <input type="hidden" class="form-control" id="nim" name="id"  value="{{ $mhs->id }}" required>
              </div> --}}
              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim"  value="{{ $mhs->nim }}" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mhs->nama }}" required>
              </div>
              <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $mhs->tgl_lahir }}" required>
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
                <input type="text" class="form-control" id="alamat" name="alamat" required value="{{ $mhs->alamat }}">
              </div>
              <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <select id="kota" class="form-select" name="kota" required>
                    @foreach($kota as $distrik)
                        <option value="{{ $distrik->kota }}">{{ $distrik->kota }}</option>
                    @endforeach
                </select>
              </div>
              <button type="submit" class="btn btn-primary mb-5" style="width: 80px">Update</button>
        </div>
        
      </form>
   
</div>


@endsection