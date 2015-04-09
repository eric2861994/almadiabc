@extends ('almadina')

@section('main-page')
<h1>Daftar Pasien</h1>

<p>Berikut ini adalah daftar pasien yang terdaftar di sistem</p>
<a href="tambah"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor</th>
	<th>Nama Pasien</th>
	<th>Jenis Kelamin</th>
	<th>Tanggal Lahir</th>
	<th>Tanggal Masuk</th>
	<th>Nomor Telepon</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	<tr>
	<td>1</td>
	<td>Susanti</td>
	<td>Perempuan</td>
	<td>7 Februari 1994</td>
	<td>2 April 2015</td>
	<td>081234567890</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	<tr>
	<td>2</td>
	<td>Stephen</td>
	<td>Laki-laki</td>
	<td>9 April 1994</td>
	<td>3 April 2015</td>
	<td>081234567891</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	<tr>
	<td>3</td>
	<td>Eric</td>
	<td>Laki-laki</td>
	<td>28 Juni 1994</td>
	<td>4 April 2015</td>
	<td>081234567892</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
</tbody>
</table>
@endsection
