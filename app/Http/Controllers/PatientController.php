<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Patient;
use App\Consultation;
use App\TransSell;
use App\TransTreatment;
use App\Http\Requests\CreatePatientRequest;

class PatientController extends Controller {

	private $patient;

	public function __construct(Patient $patient) {
		$this->patient = $patient;
	}

	public function index(Request $request)
	{
		if ($request->name) {
			$patients = $this->patient->where('name', 'like', '%'.$request->name.'%')->get();
			
		} else {
			$patients = $this->patient->get();
		}
		
		return view('patient.list', compact('patients'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('patient.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePatientRequest $request)
	{
		$this->patient->create($request->all());
		
		return redirect()->route('patient.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Patient $patient)
	{
		$id_patient = $patient->id;
		$patient_consultations = $this->patient
								      ->where('patients.id', '=', $id_patient)
									  ->join('consultations', 'consultations.id_patient', '=', 'patients.id')
						 	  		  ->get();

		return view('patient.show', compact('patient'), compact('patient_consultations'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Patient $patient)
	{
		return view('patient.edit', compact('patient'));
	}



	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Patient $patient, CreatePatientRequest $request)
	{
		$patient->fill($request->all())->save();
		
		return redirect()->route('patient.index');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showedit(Patient $patient)
	{
		return view('patient.edit', compact('patient'));
	}

	

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showupdate(Patient $patient, CreatePatientRequest $request)
	{
		$patient->fill($request->all())->save();
		
		return redirect()->route('patient.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Patient $patient)
	{
		$id_patient = $patient->id;

		$consultations = Consultation::where('id_patient', $id_patient)->get();
		$trans_sells = TransSell::where('id_patient', $id_patient)->get();
		$trans_treatments = TransTreatment::where('id_patient', $id_patient)->get();

		if(count($consultations)>0 or count($trans_sells)>0 or count($trans_treatments)>0) {
			return redirect()->back()->with('message', 'Pasien gagal dihapus, terdapat transaksi dengan pasien yang bersangkutan');
		} else {
			$patient->delete();
		
			return redirect()->route('patient.index');
		}
	}

	public function destroy_consultation(Consultation $consultation)
	{
		$consultation->delete();
		
		return redirect()->back();
	}

}
