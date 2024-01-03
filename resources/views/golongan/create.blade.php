@extends('layouts.app')
@section('content')
   <div class="card p-4">
   <form action="{{route('store')}}" method="POST">
    @csrf
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Biaya</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="gol_kode">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis Kendaraan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gol_nama">
    
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
@endsection