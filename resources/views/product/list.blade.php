@extends ('almadina')

@section('main-page')
<h1>Daftar Produk</h1>

<p>Berikut ini adalah produk yang terdaftar di sistem.</p>

<h3>Mencari Produk</h3>
<form method="get">
<div class="form-group">
<label for="query">Nama Produk</label>
<input name="name" type="text" class="form-control" id="query" />
</div>
<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Cari</button>
</form>

<h3>Tabel Produk</h3>
<a href="{{ route('product.create') }}"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor</th>
	<th>Nama</th>
	<th>Stok</th>
	<th>Harga Jual</th>
	<th>Harga Beli</th>
	<th>Deskripsi</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	@foreach ($products as $productNo => $product)
	<tr>
	<td>{{ $productNo+1 }}</td>
	<td>{{ $product->name }}</td>
	<td>{{ $product->stock }}</td>
	<td>{{ $product->sell_price }}</td>
	<td>{{ $product->buy_price }}</td>
	<td>{{ $product->description }}</td>
	<td>
	<a href="{{ route('product.edit', $product->id) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="{{ route('product.get_destroy', $product->id) }}"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
	@if(count($products)==0)
	<tr>
	<th colspan="5"><h2><center>Tidak Ada Produk</center></h2></th>
	</tr>
	@endif
	</tbody>
</table>
@endsection
