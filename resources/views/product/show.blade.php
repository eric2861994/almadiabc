@extends ('almadina')

@section ('main-page')
<h1>Informasi Produk</h1>
bla bla bla

<table>
<tr><td><b>Nomor</b></td>
<td>: {{ $product->id }}</td></tr>
<tr><td><b>Nama Produk</b></td>
<td>: {{ $product->name }}</td></tr>
<tr><td><b>Stok</b></td>
<td>: {{ $product->stock }}</td></tr>
<tr><td><b>Harga Beli</b></td>
<td>: {{ $product->buy_prce }} </td></tr>
<tr><td><b>Harga Jual</b></td>
<td>: {{ $product->sell_price }}</td></tr>
<tr><td><b>Keterangan</b></td>
<td>: {{ $product->description }}</td></tr>
</table>

@endsection
