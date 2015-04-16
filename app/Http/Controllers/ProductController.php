<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\CreateProductRequest;
use App\Product;

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
		$product->delete();
		
		return redirect()->route('product.index');
	}

}
