<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('name', 'Nama:') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
{!! Form::label('sex', 'Jenis Kelamin:') !!}
{!! Form::select('sex', array('P' => 'Perempuan', 'L' => 'Laki-laki'), null, ['class' => 'form-control']) !!}
{!! $errors->first('sex', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
{!! Form::label('birthday', 'Tanggal Lahir:') !!}
{!! Form::text('birthday', null, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
{!! $errors->first('birthday', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
{!! Form::label('phone', 'Nomor Telepon:') !!}
{!! Form::text('phone', null, ['class' => 'form-control']) !!}
{!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
{!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
</div>