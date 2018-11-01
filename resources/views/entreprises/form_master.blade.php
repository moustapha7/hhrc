
		<div class="col-md-8 col-md-offset-2 wow fadeInDownBig" data-wow-duration="0.5s" data-wow-delay="0.1s">
			<div class="brand">
						<h2>Inscrivez vous</h2>
				<br><br>
					
			</div>

		</div>


		<div class="col-md-12 left-content" style="background-color:white;">
								
	
				<div class="row" >
						
						<div class="col-sm-10">
							{!!form::label('nomEntreprise','Nom') !!}	
							<div class="form-group {{ $errors->has('nomEntreprise') ? 'has-error' :  ""}}">
								{{ Form::text('nomEntreprise',NULL,['class'=>'form-control','id'=>'nomEntreprise','placeholder'=>'nom entreprise','required'=>'required']) }}
								{{ $errors-> first('nomEntreprise','<p class="help-block">:message</p>') }}

							</div>

						</div>	
				</div>

				<div class="row">
						
						<div class="col-sm-10">
							{!!form::label('adresseEntreprise','Adresse') !!}	
							<div class="form-group {{ $errors->has('adresseEntreprise') ? 'has-error' :  ""}}">
								{{ Form::text('adresseEntreprise',NULL,['class'=>'form-control','id'=>'adresseEntreprise','placeholder'=>'adresse entreprise ','required'=>'required']) }}
								{{ $errors-> first('adresseEntreprise','<p class="help-block">:message</p>') }}

							</div>

						</div>	
				</div>
				<div class="row">
							
							<div class="col-sm-10">
								{!!form::label('telEntreprise','Telephone') !!}	
								<div class="form-group {{ $errors->has('telEntreprise') ? 'has-error' :  ""}}">
									{{ Form::text('telEntreprise',NULL,['class'=>'form-control','id'=>'telEntreprise','placeholder'=>'telephone entreprise ','required'=>'required' ]) }}
									{{ $errors-> first('telEntreprise','<p class="help-block">:message</p>') }}

								</div>

							</div>	
					</div>

				<div class="row">
						
						<div class="col-sm-10">
							{!!form::label('emailEntreprise','Email') !!}	
							<div class="form-group {{ $errors->has('emailEntreprise') ? 'has-error' :  ""}}">
								{{ Form::text('emailEntreprise',NULL,['class'=>'form-control','id'=>'emailEntreprise','placeholder'=>'email entreprise ','required'=>'required' ]) }}
								{{ $errors-> first('emailEntreprise','<p class="help-block">:message</p>') }}

							</div>

						</div>	
				</div>

				<div class="row">
						
						<div class="col-sm-10">
							{!!form::label('password','Mot de Passe') !!}	
							<div class="form-group {{ $errors->has('password') ? 'has-error' :  ""}}">
								{{ Form::text('password',NULL,['class'=>'form-control','id'=>'password','placeholder'=>'mot de passe ','required'=>'required' ]) }}
								{{ $errors-> first('password','<p class="help-block">:message</p>') }}

							</div>

						</div>	
				</div>
				


					



					<div class="form-group">
						{{ Form::button(isset($model) ? 'Update' : 'Enregistrer' , ['class'=> 'btn btn-primary','type'=>'submit']) }}
						{{ Form::button(isset($model) ? 'Annuler' : 'Annuler' , ['class'=> 'btn btn-default','type'=>'reset']) }}
					</div>

				
	</div>	
		



