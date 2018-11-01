@extends('layouts.accueil')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::model($entreprise,['route'=>['entreprises.update',$entreprise->id],'method'=>'PATCH']) !!}
				
				@include('entreprises.form_master')
			{!! Form::close() !!}
		</div>
	</div>



@endsection