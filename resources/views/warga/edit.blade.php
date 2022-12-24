@extends('layouts.master')

@section('content')

<div class="container">
    <h1>edit warga</h1>

    <form action="/warga/{{ $warga->id }}" method="POST">
        @method('put')
        @csrf
        <input type="text" name="nama" placeholder="Nama" value="{{ $warga->nama }}" class="form-control"> <br>
        <input type="text" name="nik" placeholder="NIK" value="{{ $warga->nik }}" class="form-control"> <br>
        <input type="text" name="no_kk" placeholder="No KK" value="{{ $warga->no_kk }}" class="form-control"> <br>
        <select name="jenis_kelamin" class="form-select">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="pria" @if($warga-> jenis_kelamin == "pria") selected @endif>Pria</option>
            <option value="wanita" @if($warga-> jenis_kelamin == "wanita") selected @endif>Wanita</option>
        </select> <br>
        <textarea name="alamat" rows="10" class="form-control">{{ $warga->alamat }}</textarea> <br>
        <input type="submit" name="submit" value="save" class="btn btn-primary">
    </form>
</div>

@endsection
