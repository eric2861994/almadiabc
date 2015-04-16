@extends ('almadina')

@section('main-page')
<h1>Daftar Transaksi Penjualan</h1>

<p>Berikut ini adalah transaksi Penjualan yang terdaftar di sistem.</p>
<a href="{{ route('transsell.create') }}"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<h3>Pemilihan waktu</h3>

<form class="form-inline">
<div class="form-group">
<label for="sel1">Tahun</label>
{!! Form::selectYear('sel1', 2012, 2015, 2015, ['class' => 'form-control']) !!}
<!-- <input list="browsers" name="browser">
<datalist id="browsers">
  <option value="Internet Explorer">
  <option value="Firefox">
  <option value="Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist>
<style>
  .select-editable { position:relative; background-color:white; border:solid grey 1px;  width:120px; height:18px; }
  .select-editable select { position:absolute; top:0px; left:0px; font-size:14px; border:none; width:120px; margin:0; }
  .select-editable input { position:absolute; top:0px; left:0px; width:100px; padding:1px; font-size:12px; border:none; }
  .select-editable select:focus, .select-editable input:focus { outline:none; }
</style>

<div class="select-editable">
  <select onchange="this.nextElementSibling.value=this.value">
    <option value=""></option>
    <option value="115x175 mm">115x175 mm</option>
    <option value="120x160 mm">120x160 mm</option>
    <option value="120x287 mm">120x287 mm</option>
  </select>
  <input type="text" name="format" value=""/>
</div> -->
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
	<td>{{ $trans->id }}</td>
	<td>{{ $trans->product_name }}</td>
	<td>{{ $trans->quantity }}</td>
	<td>
		@if($trans->id_patient != "")
			{{ $trans->patient_name }}
		@else
			-
		@endif
	</td>
	<td>{{ $trans->date }}</td>
	<td>{{ $trans->sell_price * $trans->quantity }}</td>
	<td>
	<a href="{{ route('transsell.edit', $trans->id) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="{{ route('transsell.get_destroy', $trans->id) }}"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
	<tr><td></td><td></td><td></td><td></td><th>Total Penjualan</th><td>{{ $totalprice }}</td><td></td></tr>
</tbody>
</table>
@endsection
