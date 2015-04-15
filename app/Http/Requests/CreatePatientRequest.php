<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePatientRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nama' => 'required|max:30',
			'j_kelamin' => 'required',
			'tanggal_lahir' => 'required|date_format:d-m-Y',
			'no_telepon' => 'required|max:20'
		];
	}

}
