@extends('app')

@section('content')

@if(Session::has('creado'))
	<div class="alert alert-success">
		<p>El álbum ha sido creado</p>
	</div>
@endif

@if(Session::has('actualizado'))
	<div class="alert alert-success">
		<strong>Hecho!</strong> Cambios realizados<br><br>
		{{Session::get('actualizado')}}
	</div>
@endif

@if(Session::has('eliminado'))
	<div class="alert alert-danger">
		<p>El álbum ha sido Eliminado</p>
	</div>
@endif

<div class="container-fluid">
	<p><a href="/validado/albumes/crear-album" class="btn btn-primary" role=button>Crear Álbum</a></p>
	@if(sizeof($albumes)>0)
		@foreach($albumes as $index => $album)
			@if($index%3==0)
				<div class="row">
			@endif
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<div class="caption">
								<h3>{{$album->nombre}}</h3>
								<p>{{$album->descripcion}}</p>
								<p><a href="/validado/fotos?id={{$album->id}}" class="btn btn-primary" role=button>Ver Fotos</a></p>
								<p><a href="/validado/albumes/actualizar-album/{{$album->id}}" class="btn btn-primary" role=button>Editar album</a></p>
								<form action="/validado/albumes/eliminar-album" method="POST" role="form">
									<input type="hidden" name="_token" value="{{ csrf_token()}}" required>
									<input type="hidden" name="id" value="{{ $album->id}}" required>
									<input class="btn btn-danger" role="button" type="submit" value="Eliminar">
								</form>
							</div>
						</div>
					</div>
			@if(($index1)%3==0)
				</div>
			@endif
		@endforeach
	@else
	<div class="alert alert-danger">
		<p>Al parecer no tienes álbumes. Crea uno!</p>
	</div>
	@endif
</div>
@endsection