@extends('layouts.app')
@section('content')
   <div class="card p-4">
   <form action="{{ route('pel_update',['id'=>$data->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-6">
                        <label for="golongan_id" class="form-label">Jenis Kendaraan </label>
                        <select class="form-select" name="gol_id" required>
                            @foreach ($golongans as $golongan)
                                <option value="{{ $golongan->id }}"
                                    {{ $data->golongan->id == $golongan->id ? 'selected' : '' }}>
                                    {{ $golongan->gol_nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_no" value="{{ $data->pel_no }}">   
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Merk Kendaraan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_nama" value="{{ $data->pel_nama }}">    
  </div>
  <div class="col-md-4">
                        <label for="user_id" class="form-label">Staff Parkir</label>
                        <select class="form-select" id="user_id" name="user_id" required>
                            @if ($users->count() > 0)
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ $data->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            @else
                                <option value="" disabled>Tidak ada staff tersedia</option>
                            @endif
                        </select>
                    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lokasi Parkir</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_alamat" value="{{ $data->pel_alamat }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Kendaraan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_hp" value="{{ $data->pel_hp }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Masuk</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_ktp" value="{{ $data->pel_ktp }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Keluar</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_seri" value="{{ $data->pel_seri }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Biaya</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pel_meteran" value="{{ $data->pel_seri }}">
</div>
<div class="col-md-4">
                        <label for="pel_aktif" class="form-label">Status</label>
                        <select name="pel_aktif" class="form-select" required>
                            <option value="Aktif" {{ $data->pel_aktif == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Non-Aktif" {{ $data->pel_aktif == 'Non-Aktif' ? 'selected' : '' }}>Non Aktif
                            </option>
                        </select>
                    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
@endsection