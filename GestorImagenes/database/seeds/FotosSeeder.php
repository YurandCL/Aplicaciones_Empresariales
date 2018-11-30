<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes2\Album;
use GestorImagenes2\Foto;
use GestorImagenes2\Usuario;

class FotosSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$albumes=Album::all();
		$contador=0;
		foreach ($albumes as $album) {
			$cantidad=rand(0,5);
			for ($i=0; $i < $cantidad ; $i++) { 
				$contador++;
				Foto::create(
					[
						'nombre' => "Nombre Foto$contador",
						'descripcion' => "Descripcion foto$contador",
						'ruta' => '/img/text.png',
						'album_id' => $album->id
					]
				);
			}
		}
	}

}