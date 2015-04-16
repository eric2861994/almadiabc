<div class="form-group {{ $errors->has('id_patient') ? 'has-error' : '' }}">
{!! Form::label('id_patient', 'Nama Pasien:') !!}
{!! Form::select('id_patient', $patients, null, ['class' => 'form-control']) !!}
{!! $errors->first('id_patient', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('id_product') ? 'has-error' : '' }}">
{!! Form::label('id_product', 'Produk:') !!}
{!! Form::select('id_product', $products, null, ['class' => 'form-control']) !!}
{!! $errors->first('id_product', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
{!! Form::label('quantity', 'Kuantitas:') !!}
{!! Form::text('quantity', null, ['class' => 'form-control']) !!}
{!! $errors->first('quantity', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
{!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
</div>