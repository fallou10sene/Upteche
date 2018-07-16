@extends('layouts.admin')
@section('contenu')
<div class="row">
	<div class="col-md-12">
	@if(session()->has('message'))
        <div class="alert alert-success m-1 text-center font-weight-bold">                                                      
            {{ session()->get('message') }}                            
        </div>
    @endif
	@if($errors->all())
		<div class="alert alert-danger m-1 text-center font-weight-bold">
			@foreach($errors->all() as $errors)

				{{ $errors }}

			@endforeach
						
		</div>
	@endif
	</div>
	<div class="col-md-12">
		<h4 class="bg-dark text-white m-1 mt-2 pl-4 py-1 rounded shadow-sm">Licence 1</h4>
		<div class="row">
			<div class="col-md-4">
				<h4>Informatique</h4>
				<form method="POST" action="{{ url('emploisl1com') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="einfol1">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<h4>Communication</h4>
				<form method="POST" action="{{ url('emploisl1info') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="ecoml1">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<h4>Multimedia</h4>
				<form method="POST" action="{{ url('emploisl1multi') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="emultil1">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-md-12">
		<h4 class="bg-dark text-white m-1 mt-3 pl-4 py-1 rounded shadow-sm">Licence 2</h4>
		<div class="row">
			<div class="col-md-4">
				<h4>Informatique</h4>
				<form method="POST" action="{{ url('emploisl2com') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="ecoml2">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<h4>Communication</h4>
				<form method="POST" action="{{ url('emploisl2info') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="einfol2">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<h4>Multimedia</h4>
				<form method="POST" action="{{ url('emploisl2multi') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="emultil2">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-md-12">
		<h4 class="bg-dark text-white m-1 mt-3 pl-4 py-1 rounded shadow-sm">Licence 3</h4>
		<div class="row">
			<div class="col-md-4">
				<h4>Informatique</h4>
				<form method="POST" action="{{ url('emploisl3com') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="ecoml3">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<h4>Communication</h4>
				<form method="POST" action="{{ url('emploisl3info') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="einfol3">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<h4>Multimedia</h4>
				<form method="POST" action="{{ url('emploisl3multi') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="emultil3">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-md-12">
		<h4 class="bg-dark text-white m-1 mt-3 pl-4 py-1 rounded shadow-sm">Master 1</h4>
		<div class="row">
			<div class="col-md-4">
				<h4>Informatique</h4>
				<form method="POST" action="{{ url('emploism1com') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="ecomm1">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<h4>Communication</h4>
				<form method="POST" action="{{ url('emploism1info') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="einfom1">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<h4>Multimedia</h4>
				<form method="POST" action="{{ url('emploism1multi') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="emultim1">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-md-12">
		<h4 class="bg-dark text-white m-1 mt-3 pl-4 py- rounded shadow-sm">Master 2</h4>
		<div class="row ">
			<div class="col-md-4">
				<h4>Informatique</h4>
				<form method="POST" action="{{ url('emploism2com') }}" enctype="multipart/form-data">
					@csrf
					
					<!--<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Téléchargement</span>							
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="inputGroupFile" name="">
							<label class="custom-file-label" for="inputGroupFile01">Choisir un fichier</label>
						</div>
						
					</div>-->
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="ecomm2">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
					
				</form>
			</div>
			<div class="col-md-4">
				<h4>Communication</h4>
				<form method="POST" action="{{ url('emploism2info') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="einfom2">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
					
				</form>
			</div>
			<div class="col-md-4">
				<h4>Multimedia</h4>
				<form method="POST" action="{{ url('emploism2multi') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-group">
						<div class="custom-file">

							<input type="file" class="custom-file-input" id="inputGroupFile" name="emultim2">
							<label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>							
						</div>
						<div class="custom-file">
							<button type="submit" class="btn btn-danger m-2 btn-md">Envoyer</button>
						</div>						
					</div>
				</form>
			</div>
			
		</div>
	</div>	
</div>

@endsection