@extends('almadina')

@section('main-page')
<h1>Daftar Perawatan</h1>

<p>Macam-macam perawatan yang terdaftar di dalam sistem.</p>
<a href="{{ route('treatment.create') }}"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>

@if(!is_null(Session::get('message')))
	<br><br>
	<div class="alert alert-danger">
        <span class="close" data-dismiss="alert">&times;</span>
        <strong>Error!</strong> {{ Session::get('message') }}
    </div>
@endif

<table class="table table-hover">
<thead>
	<tr>
	<th>Nomor</th>
	<th>Nama Perawatan</th>
	<th>Harga</th>
	<th>Deskripsi</th>
	<th>Operasi</th>
	</tr>
</thead>
<tbody>
	@foreach ($treatments as $treatmentNo => $treatment)
	<tr>
	<td>{{ $treatmentNo+1 }}</td>
	<td>{{ $treatment->name }}</td>
	<td>Rp {{ $treatment->price }}</td>
	<td>{{ $treatment->description }}</td>
	<td>
	<a href="{{ route('treatment.edit', $treatment->id) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="{{ route('treatment.get_destroy', $treatment->id) }}"><button class="btn btn-danger" onclick="return deleteConfirmation();"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
	</td>
	</tr>
	@endforeach
	@if(count($treatments)==0)
	<tr>
	<th colspan="7"><h2><center>Tidak Ada Perawatan</center></h2></th>
	</tr>
	@endif
</tbody>
</table>
@endsection
