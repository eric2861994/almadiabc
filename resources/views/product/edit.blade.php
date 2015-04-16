@extends ('almadina')

@section ('main-page')
<h1>Ubah Produk</h1>

{!! Form::model($product, ['route' => ['product.update', $product->id], 'method' => 'PUT']) !!}

@include ('product.form')

{!! Form::close() !!}

@endsection
