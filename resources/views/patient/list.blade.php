@extends ('almadina')

@section('main-page')
<h1>Daftar Pasien</h1>

<p>Berikut ini adalah daftar pasien yang terdaftar di sistem.</p>
<a href="tambah"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

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
	<td>{{ $patient->nama }}</td>
	<td>{{ $patient->j_kelamin }}</td>
	<td>{{ $patient->tanggal_lahir }}</td>
	<td>{{ $patient->tgl_masuk }}</td>
	<td>{{ $patient->no_telepon }}</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
</tbody>
</table>
@endsection
