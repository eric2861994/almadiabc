<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\TransTreatment;
use App\Http\Requests\CreateTransTreatmentRequest;

use App\Patient;
use App\Treatment;
use Carbon\Carbon;

class TransTreatmentController extends Controller {

	private $transtreatment;

	public function __construct(TransTreatment $transtreatment) {
		$this->transtreatment = $transtreatment;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transtreatments = $this->transtreatment
       					   ->join('treatments', 'trans_treatments.id_treatment', '=', 'treatments.id')
       					   ->leftjoin('patients', 'trans_treatments.id_patient', '=', 'patients.id')
       					   ->orderby('trans_treatments.id','asc')
       					   ->select('trans_treatments.id', 'patients.name as patient_name', 'treatments.name as treatment_name','trans_treatments.date', 'treatments.price')	 
        				   ->get();
		
		$totalprice = 0;
		foreach($transtreatments as $trans) {
			$totalprice += $trans->price;
		}
		return view('transaction.treatment.list', compact('transtreatments'), compact('totalprice'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$treatments=Treatment::all()->lists('name','id');
		$patients=Patient::all()->lists('name','id');
		return view('transaction.treatment.create', compact('treatments'),compact('patients'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTransTreatmentRequest $request)
	{
		$r = $request->all();
		$t = new TransTreatment;
		$t->fill($r);
		$t->date = Carbon::now();
		$t->save();		

		return redirect()->route('transtreatment.index');
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
	public function edit(TransTreatment $transtreatment)
	{
		$treatments=Treatment::all()->lists('name','id');
		$patients=Patient::all()->lists('name','id');
		return view('transaction.treatment.edit', compact('transtreatment'), compact('treatments'))->with('patients',$patients);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(TransTreatment $transtreatment, CreateTransTreatmentRequest $request)
	{
		$transtreatment->fill($request->all())->save();
		
		return redirect()->route('transtreatment.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(TransTreatment $transtreatment)
	{
		$transtreatment->delete();
		
		return redirect()->route('transtreatment.index');
	}

}
