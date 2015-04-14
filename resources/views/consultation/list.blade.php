@extends ('almadina')

@section('main-page')
<h1>Data Konsultasi</h1>

<p>Berikut ini adalah data konsultasi seluruh pasien</p>
<a href="tambah"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor</th>
	<th>Pasien</th>
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
	<td>Susanti</td>
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
	<td>Susanti</td>
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
	<tr>
	<td>3</td>
	<td>Stephen</td>
	<td>5 April 2015</td>
	<td>Amy Walker</td>
	<td>Kulit sensitif</td>
	<td>Obat anti sensitif</td>
	<td>Rp 70.000,00</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
</tbody>
</table>
@endsection
