<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DummyController extends Controller {

	public function indexPatient() {
		return view('patient.list');
	}

	public function showPatient() {
		return view('patient.show');
	}
	
	public function indexTransactionSell() {
		return view('transaction.sell');
	}
	
	public function indexTransactionPurchase() {
		return view('transaction.purchase');
	}

	public function indexTransactionTreatment() {
		
		return view('transaction.treatment');
	}
	
	public function indexProduct() {
		return view('product.list');
	}
	
	public function indexConsultation() {
		return view('consultation.list');
	}

}
