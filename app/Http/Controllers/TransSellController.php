<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\TransSell;
use App\Http\Requests\CreateTransSellRequest;

use App\Patient;
use App\Product;
use Carbon\Carbon;

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
       					   ->orderby('trans_sells.id','asc')
       					   ->select('trans_sells.id', 'products.name as product_name', 'trans_sells.quantity', 'patients.name as patient_name', 'trans_sells.date', 'trans_sells.id_patient', 'products.sell_price')	 
        				   ->get();
		
		$totalprice = 0;
		foreach($transsells as $trans) {
			$totalprice = $totalprice + ($trans->sell_price * $trans->quantity);
		}
		return view('transaction.sell.list', compact('transsells'), compact('totalprice'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$products=Product::all()->lists('name','id');
		$patients=Patient::all()->lists('name','id');
		return view('transaction.sell.create', compact('products'),compact('patients'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTransSellRequest $request)
	{
		$r = $request->all();
		$t = new TransSell;
		$t->fill($r);
		$t->id_patient = 1; //harusnya user yg login
		$t->date = Carbon::now();
		$t->save();		

		return redirect()->route('transsell.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(TransSell $transsell)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(TransSell $transsell)
	{
		$products=Product::all()->lists('name','id');
		$patients=Patient::all()->lists('name','id');
		return view('transaction.sell.edit', compact('transsell'), compact('products'))->with('patients',$patients);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(TransSell $transsell, CreateTransSellRequest $request)
	{
		$transsell->fill($request->all())->save();
		
		return redirect()->route('transsell.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(TransSell $transsell)
	{
		$transsell->delete();
		
		return redirect()->route('transsell.index');
	}

}
