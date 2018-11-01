@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::model($domaine,['route'=>['domaines.update',$domaine->id],'method'=>'PATCH']) !!}
				
				@include('domaines.form_master')
			{!! Form::close() !!}
		</div>
	</div>



@endsection