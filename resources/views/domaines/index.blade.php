@extends('layouts.app')
@section('content')


   
   
   
	<div class="row">
		<div class="col-sm-12">
			<div class="full-right">
				<h2>Domaines</h2>

			</div> 
			<a href="{{route('domaines.create')}}" class="btn btn-primary btn-sm">
				<strong>Nouveau Domaine</strong>
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
				<th>Libéllé</th>
				<th>Description</th>
				
				<th>Action	</th>
			</tr>
        </thead>
        <tbody>
            @foreach ($domaine as $key => $value)
				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->libelle}}</td>
					<td>{{$value->description}}</td>
					
					<td>

						<a href="{{route('domaines.show',$value->id)}}" class="btn btn-info btn-sm">
							<i class="fa fa-eye"  data-toggle="tooltip" data-placement="top" title="Visualiser" data-trigger="hover"></i>
						</a>

						
						<a href="{{route('domaines.edit',$value->id)}}" class="btn btn-success btn-sm">
							<i class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="modifier" data-trigger="hover"></i>
						</a>


						{{ Form::open(['method' => 'DELETE','route' => ['domaines.destroy', $value->id]]) }}
							<button type="submit" class="btn btn-danger" >
								<i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer" data-trigger="hover"></i>
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