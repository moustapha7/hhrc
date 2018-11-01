@extends('layouts.app')
@section('content')


   
   
   
	<div class="row">
		<div class="col-sm-12">
			<div class="full-right">
				<h2>Liste des Candidats inscrits</h2>

			</div> 
			<a href="{{route('candidats.create')}}" class="btn btn-primary btn-sm">
				<strong>Nouveau Candidat</strong>
			</a>
		
		</div>	
	</div>

	<p>&nbsp</p>
	<p>&nbsp</p>
	
	@if ($message = Session:: get('success'))
		<div class="alert alert-success">
			<p> {{  $message }}</p>
		</div>


	@endif


<table id="example" class="table table-striped table-bordered" style="width:100%; border: 1px solid #ddd;">
        <thead>
            <tr>	
				<th with="80px">No</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Adresse</th>
				<th>Telephone</th>
				<th>Email</th>


				<th>Action	</th>
			</tr>
        </thead>
        <tbody>
            @foreach ($candidat as $key => $value)
				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->nom}}</td>
					<td>{{$value->prenom}}</td>
					<td>{{$value->adresse}}</td>
					<td>{{$value->numTel}}</td>
					<td>{{$value->email}}</td>
					
					
					<td>

						<a href="{{route('candidats.show',$value->id)}}" class="btn btn-info">
							Details
						</a>
<!--<i class="fa-eye"  data-toggle="tooltip" data-placement="top" title="Visualiser" data-trigger="hover"></i>-->
						
						<a href="{{route('candidats.edit',$value->id)}}" class="btn btn-success btn-sm">
							Edit
						</a>


						{{ Form::open(['method' => 'DELETE','route' => ['candidats.destroy', $value->id]]) }}
							<button type="submit" class="btn btn-danger" >
								Delete

							</button>

						{{ Form::close() }}
					

					</td>


				</tr>
			@endforeach 
            
        </tbody>
       <!-- <tfoot>
             <tr>	
				<th with="80px">No</th>
				<th>Nom</th>
				<th>Adresse</th>
				<th>Email</th>
				<th>Telephone</th>
				

				<th>Action	</th>
			 </tr>	
        </tfoot>

    -->
    </table>

@endsection