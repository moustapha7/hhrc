@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::model($candidat,['route'=>['candidats.update',$candidat->id],'method'=>'PATCH']) !!}
				
				@include('candidats.form_master')
			{!! Form::close() !!}
		</div>
	</div>



@endsection