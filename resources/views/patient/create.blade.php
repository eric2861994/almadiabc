@extends ('almadina')

@section('main-page')
<h1>Tambah Pasien</h1>

{!! Form::open(['url' => url('pasien')]) !!}

<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
{!! Form::label('nama', 'Nama:') !!}
{!! Form::text('nama', null, ['class' => 'form-control']) !!}
{!! $errors->first('nama', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('j_kelamin') ? 'has-error' : '' }}">
{!! Form::label('j_kelamin', 'Jenis Kelamin:') !!}
{!! Form::select('j_kelamin', array('L' => 'Laki-laki', 'P' => 'Perempuan'), 'P', ['class' => 'form-control']) !!}
{!! $errors->first('j_kelamin', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
{!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
{!! Form::text('tanggal_lahir', null, ['class' => 'form-control', 'placeholder' => 'dd-mm-yyyy']) !!}
{!! $errors->first('tanggal_lahir', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('no_telepon') ? 'has-error' : '' }}">
{!! Form::label('no_telepon', 'Nomor Telepon:') !!}
{!! Form::text('no_telepon', null, ['class' => 'form-control']) !!}
{!! $errors->first('no_telepon', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
{!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection
