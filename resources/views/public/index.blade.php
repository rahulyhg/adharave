@extends('layouts.public')

@section('carrusel')

 	@include('public.components.carrusel')

@endsection

@section('content')

	<div class="row">
		<div class="col-xs-12">
			@include('public.alerts.success')
		</div>
	</div>

	<div class="row">

		<div class="col-xs-12">

			<h2 class="titulo_linea">
				<span>
					<i>Colección</i>
				</span>
			</h2>

		</div>

	</div> 

	@include('public.components.categorias')
	@include('public.components.categorias_sm_xs')
	@include('public.components.modales_categorias')

@endsection