@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Warga') }}</div>

            <div class="card-body">
                <a href="/warga/create" class="btn btn-success pb-2">Tambah Data</a>
                <table class="table table-hover">
                    <tr>
                        <th>Id</th>
                        <th>NAMA</th>
                        <th>NIK</th>
                        <th>No KK</th>
                        <th>JENIS KELAMIN</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach ($warga as $w)
                    <tr>
                        <td>{{ $w->id }}</td>
                        <td>{{ $w->nama }}</td>
                        <td>{{ $w->nik }}</td>
                        <td>{{ $w->no_kk }}</td>
                        <td>{{ $w->jenis_kelamin }}</td>
                        <td>{{ $w->alamat }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/warga/{{ $w->id }}/edit" class="btn btn-primary">Edit</a>
                                <form action="/warga/{{ $w->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete"" class="btn btn-danger">
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
