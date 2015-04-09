@extends ('almadina')

@section('main-page')
<h1>Data Pasien</h1>

<p>Berikut ini adalah data pasien yang anda pilih</p>
<table>
<tr><td><b>Nomor</b></td>
<td>: 1</td></tr>
<tr><td><b>Nama Pasien</b></td>
<td>: Susanti</td></tr>
<tr><td><b>Jenis Kelamin</b></td>
<td>: Perempuan</td></tr>
<tr><td><b>Tanggal Lahir</b></td>
<td>: 7 Februari 1994</td></tr>
<tr><td><b>Tanggal Masuk</b></td>
<td>: 2 April 2015</td></tr>
<tr><td><b>Nomor Telepon</b></td>
<td>: 081234567890</td></tr>
</table>

<p>
<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
</p>

<h2>Daftar Konsultasi pasien</h2> 

<a href="tambah"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor</th>
	<th>Tanggal</th>
	<th>Dokter</th>
	<th>Masalah</th>
	<th>Resep</th>
	<th>Harga</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	<tr>
	<td>1</td>
	<td>2 April 2015</td>
	<td>Paul Diesel</td>
	<td>Jerawat</td>
	<td>Obat anti-jerawat krim</td>
	<td>Rp 50.000,00</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	<tr>
	<td>2</td>
	<td>3 April 2015</td>
	<td>Paul Diesel Jr.</td>
	<td>Kulit Kering</td>
	<td>Pelembab muka</td>
	<td>Rp 40.000,00</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
</tbody>
</table>
@endsection
