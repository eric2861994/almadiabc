<div class="form-group {{ $errors->has('id_patient') ? 'has-error' : '' }}">
{!! Form::label('id_patient', 'Nama Pasien:') !!}
{!! Form::select('id_patient', $patients, null, ['class' => 'form-control']) !!}
{!! $errors->first('id_patient', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('id_treatment') ? 'has-error' : '' }}">
{!! Form::label('id_treatment', 'Jenis Perawatan:') !!}
{!! Form::select('id_treatment', $treatments, null, ['class' => 'form-control']) !!}
{!! $errors->first('id_treatment', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
{!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
</div>