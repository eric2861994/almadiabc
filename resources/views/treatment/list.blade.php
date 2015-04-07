<!DOCTYPE html>
<html lang="en">
<head>
	<title>Almadina Beauty Centre</title>
	
	<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet"/>
</head>

<body>
<div class="container">
	<h1>Almadina Beauty Centre</h1>
	
	<p>Hello, this site should lists all type of treatment that we provide</p>
	
	<table class="table table-hover">
	<thead>
		<tr>
		<th>Nomor</th>
		<th>Nama Perawatan</th>
		<th>Harga</th>
		<th>Detail</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($treatments as $treatmentNo => $treatment)
		<tr>
		<td>{{ $treatmentNo+1 }}</td>
		<td>{{ $treatment->nama }}</td>
		<td>Rp {{ $treatment->harga }}</td>
		<td>klik disini</td>
		</tr>
		@endforeach
	</tbody>
	</table>
</div>
</body>
</html>