<!--Inscription Prof etudiant -->
	@extends('layouts.admin')

	@section('contenu')
	<h4 class="m-4 align-middle text-uppercase bg-dark p-2 text-white text-center rounded font-weight-bold">
	Ajouter un nouveau Administrateur 
	</h4>
	@if(session()->has('message'))
        <div class="alert alert-success m-1 text-center font-weight-bold">                                                      
            {{ session()->get('message') }}                            
        </div>
    @endif
		<div class="container-fluid">
			<form action="{{ url('administrator/store') }}" method="post" style="margin-top: 50px;">
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
								  <option value="administrateur">Administrateur</option>
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