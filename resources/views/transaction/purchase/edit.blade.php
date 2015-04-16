@extends ('almadina')

@section('main-page')
<h1>Ubah Transaksi Pembelian Produk</h1>

{!! Form::model($transpurchase, ['route' => ['transpurchase.update', $transpurchase->id], 'method' => 'PUT']) !!}

@include ('transaction.purchase.form')

{!! Form::close() !!}

@endsection
