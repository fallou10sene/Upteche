@extends('layouts.admin')
@section('contenu')
@extends('layouts.admin')
@section('contenu')
<h4 class="p-4">Emplois L2 Communication</h4>
	@foreach($l2com as $l2com)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $l2com->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
<h4 class="p-4">Emplois L2 Informatique</h4>
	@foreach($l2info as $l2info)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $l2info->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
<h4 class="p-4">Emplois L2 Multimedia</h4>
	@foreach($l2multi as $l2multi)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $l2multi->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
@endsection
@endsection