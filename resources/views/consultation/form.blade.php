<div class="form-group {{ $errors->has('id_patient') ? 'has-error' : '' }}">
{!! Form::label('id_patient', 'Pasien:') !!}
{!! Form::select('id_patient', $patients, null, ['class' => 'form-control']) !!}
{!! $errors->first('id_patient', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('doctor') ? 'has-error' : '' }}">
{!! Form::label('doctor', 'Dokter:') !!}
{!! Form::text('doctor', null, ['class' => 'form-control']) !!}
{!! $errors->first('doctor', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('problem') ? 'has-error' : '' }}">
{!! Form::label('problem', 'Masalah:') !!}
{!! Form::text('problem', null, ['class' => 'form-control']) !!}
{!! $errors->first('problem', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('result') ? 'has-error' : '' }}">
{!! Form::label('result', 'Hasil Konsultasi:') !!}
{!! Form::text('result', null, ['class' => 'form-control']) !!}
{!! $errors->first('result', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('recipe') ? 'has-error' : '' }}">
{!! Form::label('recipe', 'Resep:') !!}
{!! Form::text('recipe', null, ['class' => 'form-control']) !!}
{!! $errors->first('recipe', '<span class="help-block">:message</span>') !!}
</div>


<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
{!! Form::label('price', 'Harga:') !!}
{!! Form::text('price', null, ['class' => 'form-control']) !!}
{!! $errors->first('price', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
{!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
</div>