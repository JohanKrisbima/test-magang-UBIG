@if(session()->has('success'))
  <script>
    alert('{{ session('success') }}');
  </script>               
@elseif(session()->has('successUpdate'))
  <script>
    alert('{{ session('successUpdate') }}');
  </script>
@elseif(session()->has('succesDelete'))
  <script>
    alert('{{ session('succesDelete') }}') ;
  </script>             
@elseif(session()->has('alfaSearch'))
  <script>
    alert('{{ session('alfaSearch') }}') ;
  </script>             
@endif

@if (isset($dontSearch) && $dontSearch === 'Data Mahasiswa Tidak Ditemukan')
<script>
  alert('{{ $dontSearch }}') ;
</script>    
    
@endif

@extends('layouts.tamplates')

@section('content')
{{-- <form action="/mahasiswa/search" method="GET"> --}}

<div id="content">
    @include('layouts.navbarTop')
   
    <h2 style="margin-bottom: 20px; color: #999;">Data Mahasiswa</h2>
    <div class="row">
      <div class="col-md-7 mx-auto">
        <button type="button" class="btn simpan btn-primary"><a href="/addData">Tambah Data</a></button>
      </div>
      <div class="col-md-5">
        <form action="/mahasiswa/search" method="GET" class="d-flex justify-content-end">
          {{-- <div class="small fw-light"><strong><b>Cari Data Mahasiswa</b></strong></div> --}}
          <div class="input-group">
              <input class="form-control border-end-0 border rounded-pill" type="search" name="search" placeholder="cari berdasarkan nim">
              <span class="input-group-append">
                  <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit">
                      <i class="fa fa-search"></i>
                  </button>
              </span>
          </div>
      </form>
          
      </div>
  </div>
  <br>
  {{-- </form>  --}}
    {{-- <br>
    <button type="button" class="btn btn-primary"><a href="/addData">Tambah Data</a></button>
    <br><br> --}}
    <div class="table-responsive" >
      <table class="table table-hover table-bordered">
        <thead  class="table-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kota</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $key=> $m)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->tgl_lahir }}</td>
                <td>{{ $m->jenis_kelamin }}</td>
                <td>{{ $m->alamat }}</td>
                <td>{{ $m->kota }}</td>
                <td>
                  <div class="d-flex justify-content-start">
                    <a href="/updateMahasiswa/{{ $m->id }}" style="margin-right: 5px">
                      <button type="button" class="btn btn-outline-success" style="font-size: 14px">Update</button>
                    </a> 
                    <form action="/deleteMahasiswa/{{ $m->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger" style="font-size: 14px"  onclick="return confirm('Apakah Anda yakin ingin menghapus data Mahasiswa ini?')">Delete</button>
                    </form>
                 </div>
                </td>
              </tr>
            @endforeach  
        </tbody>
      </table>
    </div>
</div>


@endsection