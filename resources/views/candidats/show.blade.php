@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-12 margib-tb">
			<div class="pull-left">
				<h2>Details du Candidat</h2>
			</div>
			
			
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>N° :</strong>
				{{ $candidat->id}}

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Nom :</strong>
				{{$candidat->nom}}

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Prenom :</strong>
				{{$candidat->prenom}}

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Adrese :</strong>
				{{ $candidat->adresse}}
				

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Telephone :</strong>
				{{ $candidat->numTel}}
				

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Email :</strong>
				{{ $candidat->email}}
				

			</div>
		</div>
	</div>


	<div class="pull-right">
				<a class="btn btn-primary" href="{{route('candidats.index')}}">
					<i class="glyphicon glyphicon-arrow-left">Retour</i>
				</a>
	</div>




@endsection