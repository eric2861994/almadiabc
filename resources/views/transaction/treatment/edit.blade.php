@extends ('almadina')

@section('main-page')
<h1>Ubah Transaksi Perawatan</h1>


{!! Form::model($transtreatment, ['route' => ['transtreatment.update', $transtreatment->id], 'method' => 'PUT']) !!}

@include ('transaction.treatment.form')

{!! Form::close() !!}

@endsection
