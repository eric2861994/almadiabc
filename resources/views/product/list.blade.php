@extends ('almadina')

@section('main-page')
<h1>Daftar Produk</h1>

<p>Berikut ini adalah produk yang terdaftar di sistem.</p>

<h3>Mencari Produk</h3>
<form>
<div class="form-group">
<label for="query">Nama Produk</label>
<input type="text" class="form-control" id="query" />
</div>
<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Cari</button>
</form>

<h3>Tabel Produk</h3>
<a href="tambah"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor</th>
	<th>Nama</th>
	<th>Stok</th>
	<th>Harga</th>
	<th>Deskripsi</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	<tr>
	<td>1</td>
	<td>ABC Anti Acne</td>
	<td>10</td>
	<td>Rp 50.000,00</td>
	<td>Penghilang Jerawat</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	<tr>
	<td>2</td>
	<td>ABC Skin Care</td>
	<td>11</td>
	<td>Rp 40.000,00</td>
	<td>Pelembab kulit muka</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	<tr>
	<td>3</td>
	<td>ABC Boon</td>
	<td>12</td>
	<td>Rp 12.345,00</td>
	<td>Dummy Product</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
</tbody>
</table>
@endsection
