@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>create warga</h1>

        <form action="/warga/store" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Nama" class="form-control"> <br>
            <input type="text" name="nik" placeholder="NIK" class="form-control"> <br>
            <input type="text" name="no_kk" placeholder="No KK" class="form-control"> <br>
            <select name="jenis_kelamin" class="form-select">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select> <br>
            <textarea name="alamat" rows="10" placeholder="alamat" class="form-control"></textarea> <br>
            <input type="submit" name="submit" value="save" class="btn btn-primary">
        </form>
    </div>

@endsection
