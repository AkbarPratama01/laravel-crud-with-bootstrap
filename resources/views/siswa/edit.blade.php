@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
                                        <form action="/siswa/{{$data_siswa->id}}/update" method="POST">
                                            @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama Depan</label>
                                            <input name="nama_depan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan" value="{{$data_siswa->nama_depan}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama Belakang</label>
                                            <input name="nama_belakang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Belakang" value="{{$data_siswa->nama_belakang}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                                <option value="Laki-Laki" @if($data_siswa->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                                <option value="Perempuan" @if($data_siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Agama</label>
                                            <input name="agama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Agama" value="{{$data_siswa->agama}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Alamat</label>
                                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data_siswa->alamat}}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-warning">Save</button>
                                        </form>
								</div>
							</div>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection
@section('content1')

        <h1>Edit Data</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <form action="/siswa/{{$data_siswa->id}}/update" method="POST">
            @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Depan</label>
            <input name="nama_depan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan" value="{{$data_siswa->nama_depan}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Belakang</label>
            <input name="nama_belakang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Belakang" value="{{$data_siswa->nama_belakang}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="Laki-Laki" @if($data_siswa->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if($data_siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Agama</label>
            <input name="agama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Agama" value="{{$data_siswa->agama}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data_siswa->alamat}}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Save</button>
        </form>

@endsection