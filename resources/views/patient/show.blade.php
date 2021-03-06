@extends ('almadina')

@section('main-page')
<h1>Data Pasien</h1>

<p>Berikut ini adalah data pasien yang anda pilih</p>
<table>
<tr><td><b>Nomor</b></td>
<td>: {{ $patient->id }}</td></tr>
<tr><td><b>Nama Pasien</b></td>
<td>: {{ $patient->name }}</td></tr>
<tr><td><b>Jenis Kelamin</b></td>
<td>: {{ $patient->sex == 'L' ? 'Laki-laki' : 'Perempuan' }}</td></tr>
<tr><td><b>Tanggal Lahir</b></td>
<td>: {{ $patient->birthday}} </td></tr>
<tr><td><b>Tanggal Masuk</b></td>
<td>: {{ $patient->created_at}}</td></tr>
<tr><td><b>Nomor Telepon</b></td>
<td>: {{ $patient->phone }}</td></tr>
</table>

<p>
<a href="{{ route('patient.show_edit', $patient->id) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
<a href="{{ route('patient.get_destroy', $patient->id) }}"><button class="btn btn-danger" onclick="return deleteConfirmation();"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
</p>

<h2>Daftar Konsultasi pasien</h2> 

<a href="#"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor</th>
	<th>Tanggal</th>
	<th>Dokter</th>
	<th>Masalah</th>
	<th>Resep</th>
	<th>Harga</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	@foreach($patient_consultations as $consultation)
	<tr>
	<td>{{ $consultation->id }}</td>
	<td>{{ $consultation->date}}</td>
	<td>{{ $consultation->doctor }}</td>
	<td>{{ $consultation->problem }}</td>
	<td>{{ $consultation->recipe }}</td>
	<td>{{ $consultation->price }}</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="{{ route('patient.get_destroy_consultation', $consultation->id) }}"><button class="btn btn-danger" onclick="return deleteConfirmation();"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
	@if( count($patient_consultations) === 0 )
	<tr>
	<th colspan="7"><h2><center>Tidak Ada Konsultasi</center></h2></th>
	</tr>
	@endif
</tbody>
</table>
@endsection
