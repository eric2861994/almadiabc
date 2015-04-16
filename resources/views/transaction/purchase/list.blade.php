@extends ('almadina')

@section('main-page')
<h1>Daftar Transaksi Pembelian</h1>

<p>Berikut ini adalah transaksi Pembelian yang terdaftar di sistem.</p>
<a href="{{ route('transpurchase.create') }}"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

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
	<th>Nomor Pembelian</th>
	<th>Nama Barang</th>
	<th>Jumlah Barang</th>
	<th>Username Pembeli</th>
	<th>Tanggal</th>
	<th>Total</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	@foreach($transpurchases as $trans)
	<tr>
	<td>{{ $trans->id }}</td>
	<td>{{ $trans->product_name }}</td>
	<td>{{ $trans->quantity }}</td>
	<td>{{ $trans->username }}</td>
	<td>{{ $trans->date }}</td>
	<td>Rp. {{ $trans->buy_price * $trans->quantity }}</td>
	<td>
	<a href="{{ route('transpurchase.edit', $trans->id) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="{{ route('transpurchase.get_destroy', $trans->id) }}"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
	@if(count($transpurchases)>0)
	<tr><td></td><td></td><td></td><td></td><th>Total Pembelian</th><td>Rp. {{ $totalprice }}</td><td></td></tr>
	@else
	<tr>
	<th colspan="7"><h2><center>Tidak Ada Transaksi</center></h2></th>
	</tr>
	@endif
</tbody>
</table>
@endsection
