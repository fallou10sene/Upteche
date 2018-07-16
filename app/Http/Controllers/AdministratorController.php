<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdministratorController extends Controller
{ 
	public function inscription()
	{
		return view('insadmin');
	}
	public function store(Request $request)
    {
    	$this->validate($request, [

    		'prenom' => 'required|string',
    		'nom' => 'required|string', 
    		'email' => 'required|string|email|unique:Users', 
    		'password' => 'required|string|min:6', 
    		'fonction' => 'required|string', 
    		'date' => 'required|date', 
    		'sexe' => 'required|string',  
    	]);
    	 
    	User::create([
    		'prenom' => request('prenom'),
    		'nom' => request('nom'),
    		'email' => request('email'),
    		'password' =>bcrypt(request('password')),
    		'fonction' => request('fonction'),
    		'date' => request('date'),
    		'sexe' => request('sexe'),
    	]);
    	session()->flash('message', 'l\'enregistrement a été fait avec success');
    	return back();
    }
}

