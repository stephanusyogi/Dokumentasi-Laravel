@extends('layouts.master')

@section('content')
			<h1>Detail Informasi Data Siswa</h1>
			<div class="row">
				<div class="col-lg-12">
					
				
				<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama Depan</label>
				    <input readonly=" " name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Depan" value="{{$siswa->nama_depan}}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama Belakang</label>
				    <input readonly=" " name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Belakang" value="{{$siswa->nama_belakang}}">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
				    <select readonly=" " name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
				      <option readonly=" " value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
				      <option readonly=" " value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Agama</label>
				    <input readonly=" " name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Agama" value="{{$siswa->agama}}">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Alamat</label>
				    <textarea readonly=" " name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$siswa->alamat}}</textarea >
				  </div>
				  
				</form>
				</div>
				<a href="/siswa"><button class="btn btn-warning">Kembali</button></a>
			</div>
		

@endsection

		
		




		
