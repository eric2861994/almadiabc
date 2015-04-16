@extends ('almadina')

@section('main-page')
<h1>Ubah Transaksi Penjualan Produk</h1>


{!! Form::model($transsell, ['route' => ['transsell.update', $transsell->id], 'method' => 'PUT']) !!}

@include ('transaction.sell.form')

{!! Form::close() !!}

@endsection
