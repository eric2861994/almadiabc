@extends ('almadina')

@section('main-page')
<h1>Daftar Transaksi Perawatan</h1>

<p>Berikut ini adalah transaksi Perawatan yang terdaftar di sistem.</p>
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
	<th>Nomor Transaksi</th>
	<th>Nama Pasien</th>
	<th>Nama Perawatan</th>
	<th>Tanggal</th>
	<th>Harga</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	<tr>
	<td>1</td>
	<td>Susanti</td>
	<td>Message</td>
	<td>1 April 2015</td>
	<td>Rp 11.000,00</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	<tr><td></td><td></td><td></td><th>Total Transaksi</th><td>Rp 190.000,00</td><td></td></tr>
</tbody>
</table>
@endsection
