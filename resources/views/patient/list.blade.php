@extends ('almadina')

@section('main-page')
<h1>Daftar Pasien</h1>

<p>Berikut ini adalah daftar pasien yang terdaftar di sistem.</p>

<h3>Mencari Pasien</h3>
<form method="get">
<div class="form-group">
<label for="query">Nama Pasien</label>
<input name="name" type="text" class="form-control" id="query" />
</div>
<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Cari</button>
</form>

<h3>Tabel Pasien</h3>
<a href="{{ route('patient.create') }}"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor</th>
	<th>Nama Pasien</th>
	<th>Jenis Kelamin</th>
	<th>Tanggal Lahir</th>
	<th>Tanggal Masuk</th>
	<th>Nomor Telepon</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	@foreach ($patients as $patientNo => $patient)
	<tr>
	<td>{{ $patientNo+1 }}</td>
	<td>{{ $patient->name }}</td>
	<td>{{ $patient->sex }}</td>
	<td>{{ $patient->birthday }}</td>
	<td>{{ $patient->created_at }}</td>
	<td>{{ $patient->phone }}</td>
	<td>
	<a href="{{ route('patient.show', $patient->id) }}"><button class="btn btn-info"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Lihat</button></a>
	<a href="{{ route('patient.edit', $patient->id) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Ubah</button></a>
	<a href="{{ route('patient.get_destroy', $patient->id) }}"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
	@if(count($patients)==0)
	<tr>
	<th colspan="9"><h2><center>Tidak Ada Pasien</center></h2></th>
	</tr>
	@endif
</tbody>
</table>
@endsection
