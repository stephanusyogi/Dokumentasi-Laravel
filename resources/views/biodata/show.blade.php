@extends("layout")
@section("content")

		<ul>
			<li>Id Mahasiswa : {{  $data->id }}</li>
			<li>Nama : {{  $data->name }}</li>
			<li>NIM : {{  $data->nim }}</li>
			<li>Alamat : {{  $data->address }}</li>
			<li>File Path : {{ $data->filePath}}</li>
			 <li><img src="{{ asset('photo_mhs/'.$data->photo) }}" id="showgambar" style="max-width:200px;max-height:200px;" /> </li>
		</ul>

		<a href="{{ route('biodata.index') }}"><button type="button" class="btn btn-success">Kembali</button></a>
@endsection