<?php namespace GestorImagenes2\Http\Requests;

use GestorImagenes2\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use GestorImagenes2\Foto;

class ActualizarFotoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		$user=Auth::user();
		$id=$this->get('id');
		$foto=Foto::find($id);
		$album=$user->albumes()->find($foto->album_id);
		if ($album) {
			return true;
		}
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'id'->'required|exists:fotos,id',
			'nombre'=>'required',
			'descripcion'=>'required',
			'imagen'=>'image|max:20000',
		];
	}

}
