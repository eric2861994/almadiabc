<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\TransPurchase;
use App\Http\Requests\CreateTransPurchaseRequest;

use App\Product;
use Carbon\Carbon;
class TransPurchaseController extends Controller {
	
	private $transpurchase;

	public function __construct(TransPurchase $transpurchase) {
		$this->transpurchase = $transpurchase;
	}

	public function index()
	{
		$transpurchases = $this->transpurchase
       					   	   ->join('products', 'trans_purchases.id_product', '=', 'products.id')
       					   	   ->join('users', 'trans_purchases.id_user', '=', 'users.id')
       					   	   ->orderby('trans_purchases.id', 'asc')
       					   	   ->select('trans_purchases.id','products.name as product_name','trans_purchases.quantity','users.username', 'trans_purchases.date','products.buy_price' )	 
        				       ->get();

		$totalprice=0;
		foreach ($transpurchases as $trans) {
			$totalprice += ($trans->buy_price * $trans->quantity);
		}
		return view('transaction.purchase.list', compact('transpurchases'), compact('totalprice'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$products=Product::all()->lists('name','id');
		return view('transaction.purchase.create', compact('products'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTransPurchaseRequest $request)
	{
		$r = $request->all();
		$t = new TransPurchase;
		$t->fill($r);
		$t->id_user = 1; //harusnya user yg login
		$t->date = Carbon::now();
		$t->save();		

		return redirect()->route('transpurchase.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(TransPurchase $transpurchase)
	{
		return view('transaction.purchase.show', compact('transpurchase'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(TransPurchase $transpurchase)
	{
		$products=Product::all()->lists('name','id');
		return view('transaction.purchase.edit', compact('transpurchase'),compact('products'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(TransPurchase $transpurchase, CreateTransPurchaseRequest $request)
	{
		$transpurchase->fill($request->all())->save();
		
		return redirect()->route('transpurchase.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(TransPurchase $transpurchase)
	{
		$transpurchase->delete();
		
		return redirect()->route('transpurchase.index');
	}

	


}
