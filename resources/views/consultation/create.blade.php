@extends ('almadina')

@section ('main-page')
<h1>Tambah Konsultasi</h1>

{!! Form::open(['route' => 'consultation.store']) !!}

@include ('consultation.form')

{!! Form::close() !!}

@endsection
