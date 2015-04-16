@extends ('almadina')

@section ('main-page')
<h1>Tambah Transaksi Perawatan</h1>

{!! Form::open(['route' => 'transtreatment.store']) !!}

@include ('transaction.treatment.form')

{!! Form::close() !!}

@endsection
