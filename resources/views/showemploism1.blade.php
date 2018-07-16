@extends('layouts.admin')
@section('contenu')
<h4 class="p-4">Emplois M1 Communication</h4>
	@foreach($m1com as $m1com)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $m1com->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
<h4 class="p-4">Emplois M1 Informatique</h4>
	@foreach($m1info as $m1info)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $m1info->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
<h4 class="p-4">Emplois M1 Multimedia</h4>
	@foreach($m1multi as $m1multi)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $m1multi->created_at	}}</span>
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