<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class SupprimerController extends Controller
{
   public function supprimeradmin($admin)
   {

   		$admin = User::findOrfail($admin);
         $admin->delete();

         return back();

   		
   }
   public function detacherprof($prof)
   {
   		$prof = User::findOrfail($prof);
         $prof->delete();
         return back();
   }
   public function enleveretu($etu)
   {
   		$etu = User::findOrfail($etu);
         $etu->delete();
         return back();
   }
}
