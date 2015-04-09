@extends('almadina')

@section('main-page')
<h1>Daftar Perawatan</h1>

<p>Macam-macam perawatan yang terdaftar di dalam sistem.</p>
<a href="tambah"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor</th>
	<th>Nama Perawatan</th>
	<th>Harga</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	@foreach ($treatments as $treatmentNo => $treatment)
	<tr>
	<td>{{ $treatmentNo+1 }}</td>
	<td>{{ $treatment->nama }}</td>
	<td>Rp {{ $treatment->harga }}</td>
	<td>
	<a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="#"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
</tbody>
</table>
@endsection
