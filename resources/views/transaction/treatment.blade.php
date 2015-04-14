@extends ('almadina')

@section('main-page')
<h1>Daftar Transaksi Perawatan</h1>

<p>Berikut ini adalah transaksi Perawatan yang terdaftar di sistem.</p>
<a href="tambah"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<h3>Pemilihan waktu</h3>
<form class="form-inline">
<div class="form-group">
<label for="sel1">Tahun</label>
<select id="sel1" class="form-control">
        <option>2015</option>
        <option>2016</option>
</select>
</div>
<div class="form-group">
<label for="sel2">Bulan</label>
<select id="sel2" class="form-control">
        <option>April</option>
        <option>Mei</option>
</select>
</div>
<button type="submit" class="btn btn-info">Go</button>
</form>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor Transaksi</th>
	<th>ID Pasien</th>
	<th>ID Perawatan</th>
	<th>Tanggal</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	<tr>
	<td>1</td>
	<td>1</td>
	<td>2</td>
	<td>boss</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	<tr><td></td><td></td><td></td><th>Total Transaksi</th><td>Rp 190.000,00</td><td></td></tr>
</tbody>
</table>
@endsection
