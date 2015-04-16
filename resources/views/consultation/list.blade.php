@extends ('almadina')

@section('main-page')
<h1>Data Konsultasi</h1>

<p>Berikut ini adalah data konsultasi seluruh pasien</p>
<a href="tambah"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<h3>Pemilihan waktu</h3>
<form class="form-inline">
<div class="form-group">
<label for="sel1">Tahun</label>
{!! Form::selectYear('sel1', 2012, 2015, 2015, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
<label for="sel2">Bulan</label>
{!! Form::selectMonth('sel2', 4, ['class' => 'form-control']) !!}
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
	<td>{{ $consultation->nama }}</td>
	<td>{{ $consultation->tanggal }}</td>
	<td>{{ $consultation->dokter }}</td>
	<td>{{ $consultation->masalah }}</td>
	<td>{{ $consultation->hasil_konsultasi }}</td>
	<td>{{ $consultation->resep }}</td>
	<td>Rp. {{ $consultation->harga }}</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
	<tr><td></td><td></td><td></td><td></td><td></td><td></td><th>Total Transaksi</th><td>Rp {{$totalprice}}</td><td></td></tr>
</tbody>
</table>
@endsection