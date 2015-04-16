@extends ('almadina')

@section('main-page')
<h1>Ubah Konsultasi</h1>

{!! Form::model($consultation, ['route' => ['consultation.update', $consultation->id], 'method' => 'PUT']) !!}

@include ('consultation.form')

{!! Form::close() !!}

@endsection
