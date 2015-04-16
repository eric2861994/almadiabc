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
       					   ->join('products', 'trans_sells.id_product', '=', 'products.id')
       					   ->leftjoin('patients', 'patients.id', '=', 'trans_sells.id_patient')
       					   ->select('trans_sells.id', 'products.name as product_name', 'trans_sells.quantity', 'patients.name as patient_name', 'trans_sells.date', 'trans_sells.id_patient', 'products.sell_price')	 
        				   ->get();
		
		$totalprice = 0;
		foreach($transsells as $trans) {
			$totalprice = $totalprice + ($trans->sell_price * $trans->quantity);
		}
		return view('transaction.sell', compact('transsells'), compact('totalprice'));
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
