@if(session()->has('success'))
  <script>
    alert('{{ session('success') }}');
  </script>      
@elseif(session()->has('succesDelete'))
<script>
  alert('{{ session('succesDelete') }}') ;
</script> 
@elseif(session()->has('successUpdate'))
  <script>
    alert('{{ session('successUpdate') }}');
  </script>                       
@endif

@extends('layouts.tamplates')

@section('content')
    <div id="content">

        @include('layouts.navbarTop')

        <h2 style="margin-bottom: 20px; color: #999;">Data Kota</h2>
        <button type="button" class="btn btn-primary"><a href="/addKota">Tambah Data</a></button>
    <br><br>

    <table class="table table-hover table-bordered">
        <thead class="table-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Kota</th>
            <th scope="col">Aksi</th>
            

          </tr>
        </thead>
        <tbody>
            @foreach ($kota as $key=> $distrik)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $distrik->kota }}</td>
               
                <td>
                  <a href="/updateKota/{{ $distrik->id }}" style="margin-right: 5px">
                    <button type="button" class="btn btn-outline-success" style="font-size: 14px">Update</button>
                  </a>
                  <a href="/deleteKota/{{ $distrik->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data Kota ini?')">
                    <button type="button" class="btn btn-outline-danger" style="font-size: 14px">Delete</button>
                  </a>
                </td>
              </tr>
            @endforeach  
        </tbody>
      </table>
    </div>
@endsection