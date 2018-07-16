	@extends('layouts.index')

	@section('contenu')
		<div class="container-fluid">
			<form action="{{ url('enregistre') }}" method="post">
					@csrf
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								@if($errors->all())
                        			<div class="alert alert-danger">                                
                           				 @foreach($errors->all() as $error)
                                			<li>{{ $error }} </li> 
                            			 @endforeach                               
                        			</div>
                    			@endif
							</div>
						</div>
						<div class="col-md-4">

						</div>			
					</div>
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prenom " required>
							</div>
						</div>
						<div class="col-md-4">

						</div>			
					</div>
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required>
							</div>
						</div>
						<div class="col-md-4">
							
						</div>			
					</div>
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="email" name="email" class="form-control" id="email" placeholder="email" required>
							</div>
						</div>
						<div class="col-md-4">
							
						</div>			
					</div>
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="password">Mots de Passe</label>
								<input type="password" name="password" class="form-control" id="password" required>
							</div>
						</div>
						<div class="col-md-4">
							
						</div>			
					</div>
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="date" name="date" class="form-control" id="date" required>
							</div>
						</div>
						<div class="col-md-4">
							
						</div>			
					</div>
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Fonction</label>
								<select name="fonction" class="custom-select" selected="selected">
								  <option></option>
								  <option value="professeur">Professeur</option>
								  <option value="etudiant">Etudiant</option>
								</select>
							</div>
						</div>
						<div class="col-md-0">
							
						</div>			
					</div>
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="radio" name="sexe" class="control-input" value="masculin" required>
								<label class="pr-4">Masculin</label>
							
								<input type="radio" name="sexe" class="control-input" value="feminin" required >
								<label>Feminin</label>
							</div>

						</div>
						<div class="col-md-4">
							
						</div>			
					</div>
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
							
								
								<button type="submit" class="btn btn-danger btn-block" required>
									Inscription
								</button>
							
						</div>
						<div class="col-md-8">
							
						</div>			
					</div>
			</form>				
		</div>
		
	@endsection