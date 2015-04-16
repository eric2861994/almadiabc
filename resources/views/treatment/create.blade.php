@extends ('almadina')

@section ('main-page')
<h1>Tambah Perawatan</h1>

{!! Form::open(['route' => 'treatment.store']) !!}

@include ('treatment.form')

{!! Form::close() !!}

@endsection
