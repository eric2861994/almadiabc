@extends ('almadina')

@section ('main-page')
<h1>Ubah Produk</h1>

{!! Form::model($product, ['route' => ['product.update', $product->id], 'method' => 'PUT']) !!}

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('name', 'Nama:') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('stock') ? 'has-error' : '' }}">
{!! Form::label('stock', 'Jumlah Barang:') !!}
{!! number_form('stock', $product->stock, ['class' => 'form-control']) !!}
{!! $errors->first('stock', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('buy_price') ? 'has-error' : '' }}">
{!! Form::label('buy_price', 'Harga Beli (dalam Rupiah):') !!}
{!! number_form('buy_price', $product->buy_price, ['class' => 'form-control']) !!}
{!! $errors->first('buy_price', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('sell_price') ? 'has-error' : '' }}">
{!! Form::label('sell_price', 'Harga Jual (dalam Rupiah):') !!}
{!! number_form('sell_price', $product->sell_price, ['class' => 'form-control']) !!}
{!! $errors->first('sell_price', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
{!! Form::label('description', 'Penjelasan Tambahan:') !!}
{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
{!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>


<div class="form-group">
{!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection
