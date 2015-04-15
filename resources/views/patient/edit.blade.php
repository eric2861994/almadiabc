@extends ('almadina')

@section('main-page')
<h1>Ubah Pasien</h1>

{!! Form::model($patient, ['route' => ['patient.update', $patient->id], 'method' => 'PUT']) !!}

@include ('patient.form')

{!! Form::close() !!}

@endsection
