@extends('layouts.master')


@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
					    <div class="panel-heading">
                            <h3 class="panel-title"><b>Data Siswa</b></h3>
                            
                        </div>
						<div class="panel-body">
                            <form action="/siswa" method="GET">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="cari" value="{{ old('cari')}}">
                                        <span class="input-group-btn"><button class="btn btn-primary" type="submit">Search</button></span>
                                    </div>
                                </div>
                            </form>
                            <div class="col-md-6 float-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Data Baru</button>
                            </div>
							<table class="table table-hover">
								<thead>
									<tr>
                                        <th>NAMA DEPAN</th>
                                        <th>NAMA BELAKANG</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>AGAMA</th>
                                        <th>ALAMAT</th>
                                        <th>AKSI</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data_siswa as $siswa)
                                    <tr>
                                        <td>{{ $siswa->nama_depan }}</td>
                                        <td>{{ $siswa->nama_belakang }}</td>
                                        <td>{{ $siswa->jenis_kelamin }}</td>
                                        <td>{{ $siswa->agama }}</td>
                                        <td>{{ $siswa->alamat }}</td>
                                        <td>
                                            <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Dihapus? ')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/siswa/create" method="POST">
                        @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Depan</label>
                        <input name="nama_depan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Belakang</label>
                        <input name="nama_belakang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Belakang">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Agama</label>
                        <input name="agama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Agama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection