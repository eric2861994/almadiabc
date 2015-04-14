<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\TransSell;

class TransSellController extends Controller {

	private $transsell;

	public function __construct(TransSell $transsell) {
		$this->transsell = $transsell;
	}

	public function index()
	{
		$transsells = $this->transsell
       					   ->join('produk', 'transaksi_penjualan.ID_produk', '=', 'produk.ID')
       					   ->leftjoin('pasien', 'pasien.ID', '=', 'transaksi_penjualan.ID_pasien')
       					   ->select('transaksi_penjualan.ID', 'produk.nama as nama_produk', 'transaksi_penjualan.jumlah', 'pasien.nama as nama_pasien', 'transaksi_penjualan.tanggal', 'transaksi_penjualan.ID_pasien', 'produk.harga_jual')	 
        				   ->get();
		
		$totalharga = 0;
		foreach($transsells as $trans) {
			$totalharga = $totalharga + ($trans->harga_jual * $trans->jumlah);
		}
		return view('transaction.sell', compact('transsells'), compact('totalharga'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
