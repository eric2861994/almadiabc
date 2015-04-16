@extends ('almadina')

@section ('main-page')
<h1>Tambah Transaksi Pembelian Produk</h1>

{!! Form::open(['route' => 'transpurchase.store']) !!}

@include ('transaction.purchase.form')

{!! Form::close() !!}

@endsection
