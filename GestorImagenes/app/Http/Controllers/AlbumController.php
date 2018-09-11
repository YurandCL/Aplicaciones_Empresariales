<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {

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
		return 'Mostrando Albumes del usuario';
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCrearAlbum(){
		return 'Formulario de crear Albumes';
	}
	public function posCrearAlbum(){
		return 'Almacenando Album';
	}
	public function getActualizarAlbum(){
		return 'Formulario de Actualizar Album';
	}
	public function postActualizarAlbum(){
		return 'Actualizando Album';
	}
	public function getEliminarAlbum(){
		return 'Formulario de eliminar Album';
	}
	public function postEliminarAlbum(){
		return 'Eliminando Album';
	}
}