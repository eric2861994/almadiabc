@extends ('almadina')

@section('main-page')
<h1>Data Konsultasi</h1>

<p>Berikut ini adalah data konsultasi seluruh pasien</p>
<a href="{{ route('consultation.create') }}"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<h3>Pemilihan waktu</h3>
<form class="form-inline" method="get">
<div class="form-group">
<label for="year">Tahun</label>
{!! Form::selectYear('year', 2012, 2015, 2015, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
<label for="month">Bulan</label>
{!! Form::selectMonth('month', 4, ['class' => 'form-control']) !!}
</div>
<button type="submit" class="btn btn-info">Go</button>
</form>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor</th>
	<th>Pasien</th>
	<th>Tanggal</th>
	<th>Dokter</th>
	<th>Masalah</th>
	<th>Hasil Konsultasi</th>
	<th>Resep</th>
	<th>Harga</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	@foreach ($consultations as $consultationNo => $consultation)
	<tr>
	<td>{{ $consultationNo+1 }}</td>
	<td>{{ $consultation->name }}</td>
	<td>{{ $consultation->date }}</td>
	<td>{{ $consultation->doctor }}</td>
	<td>{{ $consultation->problem }}</td>
	<td>{{ $consultation->result }}</td>
	<td>{{ $consultation->recipe }}</td>
	<td>Rp. {{ $consultation->price }}</td>
	<td>
	<a href="{{ route('consultation.edit', $consultation->id) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="{{ route('consultation.get_destroy', $consultation->id) }}"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
	<tr><td></td><td></td><td></td><td></td><td></td><td></td><th>Total Transaksi</th><td>Rp {{$totalprice}}</td><td></td></tr>
</tbody>
</table>
@endsection
