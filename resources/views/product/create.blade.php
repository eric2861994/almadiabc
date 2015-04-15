@extends ('almadina')

@section ('main-page')
<h1>Tambah Produk</h1>

{!! Form::open(['route' => 'product.store']) !!}

@include ('product.form')

{!! Form::close() !!}

@endsection
