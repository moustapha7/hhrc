@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::model($profiluser,['route'=>['profilusers.update',$profiluser->id],'method'=>'PATCH']) !!}
				
				@include('profilusers.form_master')
			{!! Form::close() !!}
		</div>
	</div>



@endsection