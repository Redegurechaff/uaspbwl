@extends('layouts.app')
@section('content')
   <div class="card p-4">
   <form action="{{route('user_store')}}" method="POST">
    @csrf
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_alamat">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No hp</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_hp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIP</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_pos">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Role</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_role">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user_aktif">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
@endsection