<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Treatment;

class TreatmentController extends Controller {
	
	private $treatment;
	
	public function __construct(Treatment $treatment) {
		$this->treatment = $treatment;
	}

	public function index() {
		$treatments = $this->treatment->get();
		
		return view('treatment.list', compact('treatments'));
	}

}
