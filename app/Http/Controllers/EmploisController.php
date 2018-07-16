<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\emploisl1com;
use App\Model\emploisl1info;
use App\Model\emploisl1multi;

use App\Model\emploisl2com;
use App\Model\emploisl2info;
use App\Model\emploisl2multi;

use App\Model\emploisl3com;
use App\Model\emploisl3info;
use App\Model\emploisl3multi;

use App\Model\emploism1com;
use App\Model\emploism1info;
use App\Model\emploism1multi;

use App\Model\emploism2com;
use App\Model\emploism2info;
use App\Model\emploism2multi;


class EmploisController extends Controller
{
	public function ajouteremplois()
	{
		return view('addemplois');
	}

	public function emploisl1com(Request $request)
	{

		$this->validate($request, [
        'einfol1' => 'required',        
        ]);

        $emploisl1com = new emploisl1com;
		$emploisl1com->users_id = auth()->user()->id;
		$emploisl1com->emplois = request('einfol1')->store('einfol1', 'public');
		$emploisl1com->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();  
	}
	public function emploisl1info(Request $request)
	{

		$this->validate($request, [
        'ecoml1' => 'required',        
        ]);

        $emploisl1info = new emploisl1info;
		$emploisl1info->users_id = auth()->user()->id;
		$emploisl1info->emplois = request('ecoml1')->store('ecoml1', 'public');
		$emploisl1info->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}

	public function emploisl1multi(Request $request)
	{

		$this->validate($request, [
        'emultil1' => 'required',        
        ]);

        $emploisl1multi = new emploisl1multi;
		$emploisl1multi->users_id = auth()->user()->id;
		$emploisl1multi->emplois = request('emultil1')->store('emultil1', 'public');
		$emploisl1multi->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}

	public function emploisl2com(Request $request)
	{

		$this->validate($request, [
        'ecoml2' => 'required',        
        ]);

        $emploisl2com = new emploisl2com;
		$emploisl2com->users_id = auth()->user()->id;
		$emploisl2com->emplois = request('ecoml2')->store('ecoml2', 'public');
		$emploisl2com->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}
	public function emploisl2info(Request $request)
	{

		$this->validate($request, [
        'einfol2' => 'required',        
        ]);

        $emploisl2info = new emploisl2info;
		$emploisl2info->users_id = auth()->user()->id;
		$emploisl2info->emplois = request('einfol2')->store('einfol2', 'public');
		$emploisl2info->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}

	public function emploisl2multi(Request $request)
	{

		$this->validate($request, [
        'emultil2' => 'required',        
        ]);

        $emploisl2multi = new emploisl2multi;
		$emploisl2multi->users_id = auth()->user()->id;
		$emploisl2multi->emplois = request('emultil2')->store('emultil2', 'public');
		$emploisl2multi->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}

	public function emploisl3com(Request $request)
	{

		$this->validate($request, [
        'ecoml3' => 'required',        
        ]);

        $emploisl3com = new emploisl3com;
		$emploisl3com->users_id = auth()->user()->id;
		$emploisl3com->emplois = request('ecoml3')->store('ecoml3', 'public');
		$emploisl3com->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}
	public function emploisl3info(Request $request)
	{

		$this->validate($request, [
        'einfol3' => 'required',        
        ]);

        $emploisl3info = new emploisl3info;
		$emploisl3info->users_id = auth()->user()->id;
		$emploisl3info->emplois = request('einfol3')->store('einfol3', 'public');
		$emploisl3info->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}

	public function emploisl3multi(Request $request)
	{

		$this->validate($request, [
        'emultil3' => 'required',        
        ]);

        $emploisl3multi = new emploisl3multi;
		$emploisl3multi->users_id = auth()->user()->id;
		$emploisl3multi->emplois = request('emultil3')->store('emultil3', 'public');
		$emploisl3multi->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}

	public function emploism1com(Request $request)
	{

		$this->validate($request, [
        'ecomm1' => 'required',        
        ]);

        $emploism1com = new emploism1com;
		$emploism1com->users_id = auth()->user()->id;
		$emploism1com->emplois = request('ecomm1')->store('ecomm1', 'public');
		$emploism1com->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}
	public function emploism1info(Request $request)
	{

		$this->validate($request, [
        'einfom1' => 'required',        
        ]);

        $emploism1info = new emploism1info;
		$emploism1info->users_id = auth()->user()->id;
		$emploism1info->emplois = request('einfom1')->store('einfom1', 'public');
		$emploism1info->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}

	public function emploism1multi(Request $request)
	{

		$this->validate($request, [
        'emultim1' => 'required',        
        ]);

        $emploism1multi = new emploism1multi;
		$emploism1multi->users_id = auth()->user()->id;
		$emploism1multi->emplois = request('emultim1')->store('emultim1', 'public');
		$emploism1multi->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}

	public function emploism2com(Request $request)
	{

		$this->validate($request, [
        'ecomm2' => 'required',        
        ]);

        $emploism2com = new emploism2com;
		$emploism2com->users_id = auth()->user()->id;
		$emploism2com->emplois = request('ecomm2')->store('ecomm2', 'public');
		$emploism2com->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}
	public function emploism2info(Request $request)
	{

		$this->validate($request, [
        'einfom2' => 'required',        
        ]);

        $emploism2info = new emploism2info;
		$emploism2info->users_id = auth()->user()->id;
		$emploism2info->emplois = request('einfom2')->store('einfom2', 'public');
		$emploism2info->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}

	public function emploism2multi(Request $request)
	{

		$this->validate($request, [
        'emultim2' => 'required',        
        ]);

        $emploism2multi = new emploism2multi;
		$emploism2multi->users_id = auth()->user()->id;
		$emploism2multi->emplois = request('emultim2')->store('emultim2', 'public');
		$emploism2multi->save();
		session()->flash('message', 'votre image a été bien envoyé avec succé');
     	return back();   
	}

	public function afficherl1com(Request $request)
	{
		$l1com = emploisl1com::orderBy('id', 'DESC')->paginate(3);
		$l1info = emploisl1info::orderBy('id', 'DESC')->paginate(3);
		$l1multi = emploisl1multi::orderBy('id', 'DESC')->paginate(3);
     	return view('showemplois', compact('l1com','l1info','l1multi'));   
	}

	public function afficherl2com(Request $request)
	{
		$l2com = emploisl2com::orderBy('id', 'DESC')->paginate(3);
		$l2info = emploisl2info::orderBy('id', 'DESC')->paginate(3);
		$l2multi = emploisl2multi::orderBy('id', 'DESC')->paginate(3);
     	return view('showemplois2', compact('l2com','l2info','l2multi'));   
	}

	public function afficherl3com(Request $request)
	{
		$l3com = emploisl3com::orderBy('id', 'DESC')->paginate(3);
		$l3info = emploisl3info::orderBy('id', 'DESC')->paginate(3);
		$l3multi = emploisl3multi::orderBy('id', 'DESC')->paginate(3);
     	return view('showemplois3', compact('l3com','l3info','l3multi'));   
	}
	public function afficherm1com(Request $request)
	{
		$m1com = emploisl3com::orderBy('id', 'DESC')->paginate(3);
		$m1info = emploisl3info::orderBy('id', 'DESC')->paginate(3);
		$m1multi = emploisl3multi::orderBy('id', 'DESC')->paginate(3);
     	return view('showemploism1', compact('m1com','m1info','m1multi'));   
	}
	public function afficherm2com(Request $request)
	{
		$m2com = emploism2com::orderBy('id', 'DESC')->paginate(3);
		$m2info = emploism2com::orderBy('id', 'DESC')->paginate(3);
		$m2multi = emploism2com::orderBy('id', 'DESC')->paginate(3);
     	return view('showemploism2', compact('m2com','m2info','m2multi'));   
	}







	public function listeteachers()
	{

		$professeur = User::where('fonction', 'professeur')->orderby('id', 'DESC')->get();
		return view('tealiste', compact('professeur'));

	}
	public function listestudents()
	{

		$etudiant = User::where('fonction', 'etudiant')->orderby('id', 'DESC')->get();
		return view('stuliste', compact('etudiant'));

	}
	public function listeadmin()
	{
		//$administrateur = User::all()->where('fonction', 'administrateur')->except(Auth::id());
		$adminitrateur = User::where('fonction', 'administrateur')->orderby('id', 'DESC')->get();
		return view('adminliste', compact('adminitrateur'));

	}

	public function profiladmin($admin)
	{

		$adminitrateur = User::findOrFail($admin);
		return view('profiladmin', compact('adminitrateur'));

	}
	public function profilprof($prof)
	{

		$professeur = User::findOrFail($prof);
		return view('profilprof', compact('professeur'));

	}
	public function profiletu($etu)
	{

		$etudiant = User::findOrFail($etu);
		return view('profiladmin', compact('etudiant'));

	}
}
