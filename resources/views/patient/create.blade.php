@extends ('almadina')

@section ('main-page')
<h1>Tambah Pasien</h1>

{!! Form::open(['route' => 'patient.store']) !!}

@include ('patient.form')

{!! Form::close() !!}

@endsection
