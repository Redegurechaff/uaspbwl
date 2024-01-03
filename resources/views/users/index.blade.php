@extends('layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">Data Staff & Admin</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('user_create') }}" class="btn btn-primary">Tambah Data</a>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>NIP</th>
                        <th>Role</th>
                        <th>Status Aktif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->user_alamat }}</td>
                            <td>{{ $d->user_hp }}</td>
                            <td>{{ $d->user_pos }}</td>
                            <td>{{ $d->user_role }}</td>
                            <td>{{ $d->user_aktif }}</td>
                            <td>
                                <a href="{{ route('user_edit', ['id' => $d->id]) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('user_delete', ['id' => $d->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection