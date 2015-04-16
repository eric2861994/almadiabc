<!DOCTYPE html>
<html lang="en">
<head>
	<title>Almadina Beauty Centre</title>
	
	<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" />
	<script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
</head>

<body>
<div class="container">
	<h1><img height="100" width="117" src="{{ url('img/logo-almadina.png') }}" alt="logo" /> Almadina Beauty Centre</h1>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open(['url' => url('/auth/login'), 'class' => 'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('username', 'Username', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('username', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						
						<div class="form-group">
							{!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Login
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>
