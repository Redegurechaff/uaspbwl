@extends('layouts.app')
@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">Data Pengunjung</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('pel_create') }}" class="btn btn-primary">Tambah Data</a>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th> 
                        <th>Jenis kendaraan</th>
                        <th>Merk Kendaraan</th>
                        <th>Staff Parkir</th>
                        <th>Lokasi Parkir</th>
                        <th>No Kendaraan</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Biaya</th>
                        <th>Status Aktif</th>
                        <th>Aksi</th>  
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->golongan->gol_nama }}</td>
                            <td>{{ $d->pel_nama }}</td>
                            <td>{{ $d->user->name }}</td>
                            <td>{{ $d->pel_alamat }}</td>
                            <td>{{ $d->pel_hp }}</td>
                            <td>{{ $d->pel_ktp }}</td>
                            <td>{{ $d->pel_seri }}</td>
                            <td>{{ $d->pel_meteran }}</td>
                            <td>{{ $d->pel_aktif }}</td>
                            <td>
                                <a href="{{ route('pel_edit', ['id' => $d->id]) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('pel_delete', ['id' => $d->id]) }}" method="POST">
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