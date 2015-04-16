<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Consultation;
use App\Http\Requests\CreateConsultationRequest;
use App\Patient;
use Carbon\Carbon;

class ConsultationController extends Controller {

	private $consultation;

	public function __construct(Consultation $consultation) {
		$this->consultation = $consultation;
	}

	public function index()
	{
		$consultations=$this->consultation
	           				->leftjoin('patients', 'consultations.id_patient', '=', 'patients.id')
	           				->orderby('consultations.id','asc')
	           				->select('consultations.id', 'patients.name', 'consultations.doctor', 'consultations.date', 'consultations.problem', 'consultations.result', 'consultations.recipe','consultations.price')
	            			->get();
		$totalprice=0;
		foreach($consultations as $consultation)
		{
			$totalprice+=$consultation->price;
		}
		return view('consultation.list', compact('consultations'), compact('totalprice'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$patients=Patient::all()->lists('name','id');
		return view('consultation.create',compact('patients'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateConsultationRequest $request)
	{
		$r = $request->all();
		$t = new Consultation;
		$t->fill($r);
		$t->date = Carbon::now();
		$t->save();		

		return redirect()->route('consultation.index');
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
	public function edit(Consultation $consultation)
	{
		$patients=Patient::all()->lists('name','id');
		return view('consultation.edit', compact('consultation'), compact('patients'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Consultation $consultation, CreateConsultationRequest $request)
	{
		$consultation->fill($request->all())->save();
		
		return redirect()->route('consultation.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Consultation $consultation)
	{
		$consultation->delete();
		
		return redirect()->route('consultation.index');
	}

}
