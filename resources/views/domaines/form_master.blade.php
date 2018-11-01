
		<div class="col-md-8 col-md-offset-2 wow fadeInDownBig" data-wow-duration="0.5s" data-wow-delay="0.1s">
			<div class="brand">
						<h2>Ajout d'un domaine</h2>
				<br><br>
					
			</div>

		</div>


		<div class="col-md-12 left-content" style="background-color:white;">
								
	
				<div class="row" >
						
						<div class="col-sm-10">
							{!!form::label('libelle','Libellé') !!}	
							<div class="form-group {{ $errors->has('libelle') ? 'has-error' :  ""}}">
								{{ Form::text('libelle',NULL,['class'=>'form-control','id'=>'libelle','placeholder'=>'saisir le libelle','required'=>'required']) }}
								{{ $errors-> first('libelle','<p class="help-block">:message</p>') }}

							</div>

						</div>	
				</div>

				<div class="row">
						
						<div class="col-sm-10">
							{!!form::label('description','Description') !!}	
							<div class="form-group {{ $errors->has('description') ? 'has-error' :  ""}}">
								{{ Form::text('description',NULL,['class'=>'form-control','id'=>'description','placeholder'=>'description ','required'=>'required']) }}
								{{ $errors-> first('description','<p class="help-block">:message</p>') }}

							</div>

						</div>	
				</div>

				


					<div class="form-group">
						{{ Form::button(isset($model) ? 'Update' : 'Enregistrer' , ['class'=> 'btn btn-primary','type'=>'submit']) }}
						{{ Form::button(isset($model) ? 'Annuler' : 'Annuler' , ['class'=> 'btn btn-default','type'=>'reset']) }}
					</div>
		</div>	
		



