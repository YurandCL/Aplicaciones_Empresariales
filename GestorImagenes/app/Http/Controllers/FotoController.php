<?php namespace GestorImagenes\Http\Controllers;

class FotoController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function getIndex()
	{
		return 'Mostrando fotos del usuario';
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCrearFoto(){
		return 'Formulario de crear fotos';
	}
	public function posCrearFoto(){
		return 'Almacenando foto';
	}
	public function getActualizar(){
		return 'Formulario de Actualizar foto';
	}
	public function postActualizar(){
		return 'Actualizando foto';
	}
	public function getEliminar(){
		return 'Formulario de eliminar foto';
	}
	public function postEliminar(){
		return 'Eliminando foto';
	}
	public function missingMethod($parameters=array()){
		abort(404);
	}
}
