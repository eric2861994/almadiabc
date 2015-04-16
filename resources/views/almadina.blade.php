<?php $user = \Auth::user() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Almadina Beauty Centre</title>
	
	<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ url('css/bootstrap-theme.min.css') }}" rel="stylesheet" />
	<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
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
				<li><a href="{{ url('penjualan-produk') }}">Tr Penjualan</a></li>
				<li><a href="{{ url('konsultasi') }}">Tr Konsultasi</a></li>
				<li><a href="{{ url('transaksi-perawatan') }}">Tr Perawatan</a></li>
				<li><a href="{{ url('pembelian-produk') }}">Tr Pembelian</a></li>
				@if (!is_null($user))
					<li><a href="{{ url('/auth/logout') }}"><font color="blue">Logout</font></a></li>
				@endif

			</ul>
			</div>
		</div>
	</nav>
	
	@yield('main-page')
</div>
</body>
</html>