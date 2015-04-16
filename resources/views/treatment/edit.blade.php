@extends ('almadina')

@section('main-page')
<h1>Ubah Perawatan</h1>

{!! Form::model($treatment, ['route' => ['treatment.update', $treatment->id], 'method' => 'PUT']) !!}

@include ('treatment.form')

{!! Form::close() !!}

@endsection
