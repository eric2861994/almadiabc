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
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('pasien') }}">Pasien</a></li>
				<li><a href="{{ url('produk') }}">Produk</a></li>
				<li><a href="{{ url('perawatan') }}">Perawatan</a></li>
				<li><a href="{{ url('penjualan') }}">Tr Penjualan</a></li>
				<li><a href="{{ url('konsultasi') }}">Tr Konsultasi</a></li>
				<li><a href="{{ url('tr_perawatan') }}">Tr Perawatan</a></li>
				<li><a href="{{ url('pembelian') }}">Tr Pembelian</a></li>
				<?php $user = \Auth::user() ?>
				@if (!is_null($user))
					<li><a href="#">{{ $user->username }}</a></li>
				@endif
			</ul>
			</div>
		</div>
	</nav>
	
	@yield('main-page')
</div>
</body>
</html>