@extends('layouts.app')
@section('content')
   <div class="card p-4">
   <form action="{{route('pel_store')}}" method="POST">
    @csrf
    <div class="col-md-6">
                     <label for="gol_id" class="form-label">Jenis Kendaraan</label>
                            <select class="form-select" id="gol_id" name="gol_id" required>
                                <option value="" selected disabled>Pilih Jenis Kendaraan</option>
                                @foreach ($golongans as $golongan)
                                    <option value="{{ $golongan->id }}">{{ $golongan->gol_nama }}</option>
                                @endforeach
                            </select>
                        </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_no">    
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Merk Kendaraan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_nama">    
  </div>
  <div class="col-md-4">
                            <label for="user_id" class="form-label">Staff Parkir</label>
                            <select class="form-select" id="user_id" name="user_id" required>
                                <option value="" selected disabled>Pilih staff</option>
                                @if ($users->count() > 0)
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                @else
                                    <option value="" disabled>Tidak ada Staff tersedia</option>
                                @endif
                            </select>
                        </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lokasi Parkir</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_alamat">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Kendaraan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_hp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Masuk</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_ktp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Keluar</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_seri">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Biaya</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_meteran">
</div>
<div class="col-md-4">
                            <label for="pel_aktif" class="form-label">Status</label>
                            <select name="pel_aktif" class="form-select" required>
                                <option value="" selected disabled>Pilih status</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Non Aktif">Non Aktif</option>
                            </select>
                        </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
@endsection