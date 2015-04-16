@extends ('almadina')

@section ('main-page')
<h1>Tambah Transaksi Penjualan Produk</h1>

{!! Form::open(['route' => 'transsell.store']) !!}

@include ('transaction.sell.form')

{!! Form::close() !!}

@endsection
