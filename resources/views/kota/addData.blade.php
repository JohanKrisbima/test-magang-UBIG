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

   
    <form action="/createKota" method="POST">
        @csrf
        <div class="d-grid gap-1 col-6 mx-auto mb-5">
            <h1 class="d-flex justify-content-center mb-4">Tambah Data Kota</h1>
                <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" required>
              </div>
              <button type="submit" class="btn btn-primary mb-5" style="width: 80px">Simpan</button>
        </div>
        
      </form>
   
</div>


@endsection