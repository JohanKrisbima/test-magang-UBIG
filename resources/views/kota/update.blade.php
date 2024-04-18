@extends('layouts.tamplates')

@section('content')

<div id="content">
    @include('layouts.navbarTop')

    <form action="/updateKota/{{ $kota->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="d-grid gap-1 col-6 mx-auto mb-5">
              <h1 class="d-flex justify-content-center mb-4">Update Data Kota</h1>
              
              <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota"  value="{{ $kota->kota }}" required>
              </div>
              
              <button type="submit" class="btn btn-primary mb-5" style="width: 80px">Update</button>
        </div>
        
      </form>
   
</div>


@endsection