<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Treatment;
use App\TransTreatment;
use App\Http\Requests\CreateTreatmentRequest;

class TreatmentController extends Controller {
	
	private $treatment;

	public function __construct(Treatment $treatment) {
		$this->treatment = $treatment;
	}

	public function index()
	{
		$treatments = $this->treatment->get();
		
		return view('treatment.list', compact('treatments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('treatment.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTreatmentRequest $request)
	{
		$this->treatment->create($request->all());
		
		return redirect()->route('treatment.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Treatment $treatment)
	{
		return view('treatment.show', compact('treatment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Treatment $treatment)
	{
		return view('treatment.edit', compact('treatment'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Treatment $treatment, CreateTreatmentRequest $request)
	{
		$treatment->fill($request->all())->save();
		
		return redirect()->route('treatment.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Treatment $treatment)
	{
		$id_treatment = $treatment->id;
		
		$trans_treatments = TransTreatment::where('id_treatment', $id_treatment)->get();
		foreach($trans_treatments as $trans_treatment) {
			$trans_treatment->delete();
		}

		if(count($trans_treatment)>0) {
			return redirect()->back()->with('message', 'Perawatan gagal dihapus, terdapat transaksi dengan perawatan terkait');
		} else {
			$treatment->delete();
		
			return redirect()->route('treatment.index');
		}
	}

}
