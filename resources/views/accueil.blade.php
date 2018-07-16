	@extends('layouts.index')

	@section('contenu')		
			<div class="container-fluid m-4">
				<form action="{{ url('connexion') }}" method="POST">
					@csrf
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								@if($errors->all())
									<div class="alert alert-danger">
										@foreach($errors->all() as $error)
											<li>{{ $error }}</li>
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
								<label for="email">Entrez votre email</label>
								<input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}">
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
								<input type="password" name="password" class="form-control" id="password">
							</div>
						</div>
						<div class="col-md-4">
							
						</div>			
					</div>
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
							
								
								<input type="submit" value="Connexion" class="btn btn-danger btn-block">
							
						</div>
						<div class="col-md-8">
							
						</div>			
					</div>
				</form>
				
			</div>
	@endsection