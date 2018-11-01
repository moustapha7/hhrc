
		<div class="col-md-8 col-md-offset-2 wow fadeInDownBig" data-wow-duration="0.5s" data-wow-delay="0.1s">
			<div class="brand">
						<h2>Ajout d'un Profil</h2>
				<br><br>
					
			</div>

		</div>


		<div class="col-md-12 left-content" style="background-color:white;">
								
	
				<div class="row" >
						
						<div class="col-sm-10">
							{!!form::label('role_name','Role') !!}	
							<div class="form-group {{ $errors->has('role_name') ? 'has-error' :  ""}}">
								{{ Form::text('role_name',NULL,['class'=>'form-control','id'=>'role_name','placeholder'=>'saisir le role','required'=>'required']) }}
								{{ $errors-> first('role_name','<p class="help-block">:message</p>') }}

							</div>

						</div>	
				</div>

				


					<div class="form-group">
						{{ Form::button(isset($model) ? 'Update' : 'Enregistrer' , ['class'=> 'btn btn-primary','type'=>'submit']) }}
						{{ Form::button(isset($model) ? 'Annuler' : 'Annuler' , ['class'=> 'btn btn-default','type'=>'reset']) }}
					</div>
		</div>	
		



