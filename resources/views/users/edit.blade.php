@extends('layouts.app')
@section('content')
   <div class="card p-4">
   <form action="{{ route('user_update',['id'=>$data->id]) }}" method="POST">
    @csrf
    @method('PUT')
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $data->name }}">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ $data->email }}">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{ $data->password }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_alamat" value="{{ $data->user_alamat }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No hp</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_hp" value="{{ $data->user_hp }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIP</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_pos" value="{{ $data->user_pos }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Role</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_role" value="{{ $data->user_role }}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_aktif" value="{{ $data->user_aktif }}">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
@endsection