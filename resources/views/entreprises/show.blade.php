@extends('layouts.accueil')

@section('content')
	<div class="row">
		<div class="col-lg-12 margib-tb">
			<div class="pull-left">
				<h2>Détails de l'entreprise</h2>
			</div>
			
			
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>N° :</strong>
				{{ $entreprise->id}}

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Nom :</strong>
				{{ $entreprise->nomEntreprise}}

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Adresse :</strong>
				{{ $entreprise->adresseEntreprise}}

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Email :</strong>
				{{ $entreprise->emailEntreprise}}
				

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12  col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Telephone :</strong>
				{{ $entreprise->telEntreprise}}
				

			</div>
		</div>
	</div>


	<div class="pull-right">
				<a class="btn btn-primary" href="{{route('entreprises.index')}}">
					<i class="glyphicon glyphicon-arrow-left">Retour</i>
				</a>
	</div>




@endsection