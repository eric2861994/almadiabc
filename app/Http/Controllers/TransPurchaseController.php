<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\TransPurchase;

class TransPurchaseController extends Controller {

	private $transpurchase;

	public function __construct(TransPurchase $transpurchase) {
		$this->transpurchase = $transpurchase;
	}

	public function index()
	{
		$transpurchases = $this->transpurchase
       					   	   ->join('produk', 'transaksi_pembelian.ID_produk', '=', 'produk.ID')	 
        				       ->get();

		$totalharga = 0;
		foreach($transpurchases as $trans) {
			$totalharga = $totalharga + ($trans->harga_beli * $trans->jumlah);
		}
		return view('transaction.purchase', compact('transpurchases'), compact('totalharga'));
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
