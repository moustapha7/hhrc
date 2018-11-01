@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-12 margib-tb">
			<div class="pull-left">
				<h2>Détails du domaine</h2>
			</div>
			
			
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>N° :</strong>
				{{ $domaine->id}}

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Libellé :</strong>
				{{ $domaine->libelle}}

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Description :</strong>
				{{ $domaine->description}}

			</div>
		</div>
	</div>

	


	<div class="pull-right">
				<a class="btn btn-primary" href="{{route('domaines.index')}}">
					<i class="glyphicon glyphicon-arrow-left">Retour</i>
				</a>
	</div>




@endsection