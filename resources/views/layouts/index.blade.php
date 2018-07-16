<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap1.js') }}"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row bg-danger p-2 text-white">
				<div class="col-md-2">
					
				</div>
				<div class="col-md-4">
					<a href="#" class="btn btn-danger">UPTECH</a>
				</div>
				
					<div class="col-md-2">
						
					</div>
				@if(auth()->check())
					
				@else
					<div class="col-md-2">
						<a href="{{ url('/') }}" class="btn btn-danger">Connexion</a>
					</div>
					<div class="col-md-2">
						<a href="{{ url('inscription') }}" class="btn btn-danger">Inscription</a>
					</div>
				@endif
				
			</div>
	</div>
	@yield('contenu')
</body>
</html>