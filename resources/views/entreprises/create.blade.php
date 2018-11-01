@extends('layouts.accueil')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{{  Form::open(['route'=>'entreprises.store','method'=>'POST']) }}
				@include('entreprises.form_master');

			{{ form::close() }}

		</div>
	</div>


@endsection