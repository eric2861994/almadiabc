<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('name', 'Nama:') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>


<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
{!! Form::label('price', 'Price:') !!}
{!! Form::text('price', null, ['class' => 'form-control']) !!}
{!! $errors->first('price', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
{!! Form::label('description', 'Deskripsi:') !!}
{!! Form::text('description', null, ['class' => 'form-control']) !!}
{!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
{!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
</div>