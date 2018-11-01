
		<div class="col-md-8 col-md-offset-2 wow fadeInDownBig" data-wow-duration="0.5s" data-wow-delay="0.1s">
			<div class="brand">
						<h2>Inscrivez vous</h2>
				<br><br>
					
			</div>

		</div>


		<div class="col-md-10 left-content" style="background-color:white;">
					
			<div class="row">
						
					<div class="col-sm-10">
						Nom
						<div class="form-group {{ $errors->has('nom') ? 'has-error' :  ""}}">
							{{ Form::text('nom',NULL,['class'=>'form-control','id'=>'nom','placeholder'=>'saisir votre nom ','required'=>'required']) }}
							{{ $errors-> first('nom','<p class="help-block">:message</p>') }}

						</div>
					</div>	
						
			</div>

			<div class="row">
					
					<div class="col-sm-10">
						{!!form::label('prenom','Prenom') !!}	

						<div class="form-group {{ $errors->has('prenom') ? 'has-error' :  ""}}">
							{{ Form::text('prenom',NULL,['class'=>'form-control','id'=>'prenom','placeholder'=>'saisir votre prenom ','required'=>'required']) }}
							{{ $errors-> first('prenom','<p class="help-block">:message</p>') }}

						</div>

					</div>	
			</div>

			<div class="row">
					
					<div class="col-sm-10">
						{!!form::label('adresse','Adresse') !!}	

						<div class="form-group {{ $errors->has('adresse') ? 'has-error' :  ""}}">
							{{ Form::text('adresse',NULL,['class'=>'form-control','id'=>'adresse','placeholder'=>'saisir votre adresse ','required'=>'required']) }}
							{{ $errors-> first('adresse','<p class="help-block">:message</p>') }}

						</div>

					</div>	
			</div>

			<div class="row">
					
					<div class="col-sm-10">

						{!!form::label('numTel','Telephone') !!}	

						<div class="form-group {{ $errors->has('numTel') ? 'has-error' :  ""}}">
							{{ Form::text('numTel',NULL,['class'=>'form-control','id'=>'numTel','placeholder'=>'saisir votre Telephone ','required'=>'required']) }}
							{{ $errors-> first('numTel','<p class="help-block">:message</p>') }}

						</div>

					</div>	
			</div>


			<div class="row">
					
					<div class="col-sm-10">
						{!!form::label('email','Email') !!}
						<div class="form-group {{ $errors->has('email') ? 'has-error' :  ""}}">
							{{ Form::text('email',NULL,['class'=>'form-control','id'=>'email','placeholder'=>'saisir votre Email ','required'=>'required']) }}
							{{ $errors-> first('email','<p class="help-block">:message</p>') }}

						</div>

					</div>	
			</div>

			<div class="row">
					
					<div class="col-sm-10">

						{!!form::label('password','Mot de passe') !!}
						<div class="form-group {{ $errors->has('password') ? 'has-error' :  ""}}">
							{{ Form::password('password',NULL,['class'=>'form-control','id'=>'password','placeholder'=>'saisir votre mot de passe ','required'=>'required']) }}
							{{ $errors-> first('password','<p class="help-block">:message</p>') }}

						</div>

					</div>	
			</div>



				

				<div class="form-group">
					{{ Form::button(isset($model) ? 'Update' : 'Valider' , ['class'=> 'btn btn-primary','type'=>'submit']) }}
					{{ Form::button(isset($model) ? 'Annuler' : 'Annuler' , ['class'=> 'btn btn-default','type'=>'reset']) }}
				</div>

		</div>	


