@extends ('almadina')

@section('main-page')
<h1>Daftar Transaksi Perawatan</h1>

<p>Berikut ini adalah transaksi Perawatan yang terdaftar di sistem.</p>
<a href="{{ route('transtreatment.create') }}"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<h3>Pemilihan waktu</h3>
<form class="form-inline">
<div class="form-group">
<label for="year">Tahun</label>
{!! Form::selectYear('sel1', 2012, 2015, 2015, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
<label for="month">Bulan</label>
{!! Form::selectMonth('sel2', 4, ['class' => 'form-control']) !!}
</div>
<button type="submit" class="btn btn-info">Go</button>
</form>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor Transaksi</th>
	<th>Nama Pasien</th>
	<th>Nama Perawatan</th>
	<th>Tanggal</th>
	<th>Harga</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	@foreach($transtreatments as $trans)
	<tr>
	<td>{{ $trans->id }}</td>
	<td>{{ $trans->patient_name }}</td>
	<td>{{ $trans->treatment_name }}</td>
	<td>{{ $trans->date }}</td>
	<td>{{ $trans->price }}</td>
	<td>
	<a href="{{ route('transtreatment.edit', $trans->id) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="{{ route('transtreatment.get_destroy', $trans->id) }}"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
	@if(count($transtreatments)>0)
	<tr><td></td><td></td><td></td><th>Total Transaksi</th><td>{{ $totalprice }}</td><td></td></tr>
	@else
	<tr>
	<th colspan="7"><h2><center>Tidak Ada Transaksi</center></h2></th>
	</tr>
	@endif
</tbody>
</table>
@endsection
