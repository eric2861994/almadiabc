@extends ('almadina')

@section('main-page')
<h1>Daftar Transaksi Penjualan</h1>

<p>Berikut ini adalah transaksi Penjualan yang terdaftar di sistem.</p>
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
	<th>Nomor Penjualan</th>
	<th>Nama Barang</th>
	<th>Jumlah Barang</th>
	<th>Nama Pasien Pembeli</th>
	<th>Tanggal</th>
	<th>Total</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	@foreach($transsells as $trans)
	<tr>
	<td>{{ $trans->ID }}</td>
	<td>{{ $trans->nama_produk }}</td>
	<td>{{ $trans->jumlah }}</td>
	<td>
		@if($trans->ID_pasien != "")
			{{ $trans->nama_pasien }}
		@else
			-
		@endif
	</td>
	<td>{{ $trans->tanggal }}</td>
	<td>{{ $trans->harga_jual * $trans->jumlah }}</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
	<tr><td></td><td></td><td></td><td></td><th>Total Penjualan</th><td>{{ $totalharga }}</td><td></td></tr>
</tbody>
</table>
@endsection
