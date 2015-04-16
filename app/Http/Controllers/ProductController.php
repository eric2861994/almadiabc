<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\CreateProductRequest;
use App\Product;
use App\TransSell;
use App\TransPurchase;

class ProductController extends Controller {

	private $product;

	public function __construct(Product $product) {
		$this->product = $product;
	}
	
	public function index(Request $request)
	{
		if ($request->name)
			$products = $this->product->where('name', 'like', '%'.$request->name.'%')->get();
		else
			$products = $this->product->get();
		
		
		return view('product.list', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return view('product.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProductRequest $request)
	{
		$this->product->create($request->all());
		
		return redirect()->route('product.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Product $product)
	{
		return view('product.show', compact('product'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Product $product)
	{
		return view('product.edit', compact('product'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Product $product, CreateProductRequest $request)
	{
		$product->fill($request->all())->save();
		
		return redirect()->route('product.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Product $product)
	{
		$id_product = $product->id;
		
		$trans_sells = TransSell::where('id_product', $id_product)->get();
		foreach($trans_sells as $trans_sell) {
			$trans_sell->delete();
		}

		$trans_purchases = TransPurchase::where('id_product', $id_product)->get();
		foreach($trans_purchases as $trans_purchase) {
			$trans_purchase->delete();
		}

		if(count($trans_sells)>0 or count($trans_purchases)>0) {
			return redirect()->back()->with('message', 'Produk gagal dihapus, terdapat transaksi dengan produk terkait');
		} else {
			$product->delete();
		
			return redirect()->route('product.index');
		}
	}

}
