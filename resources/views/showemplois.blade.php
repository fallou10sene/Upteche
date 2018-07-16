@extends('layouts.admin')
@section('contenu')
<h4 class="p-4">Emplois L1 Communication</h4>
	@foreach($l1com as $licom)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $licom->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
<h4 class="p-4">Emplois L1 Informatique</h4>
	@foreach($l1info as $l1info)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $l1info->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
<h4 class="p-4">Emplois L1 Multimedia</h4>
	@foreach($l1multi as $l1multi)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $l1multi->created_at	}}</span>
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