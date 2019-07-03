<?php

namespace App\Http\Controllers\Admin;

use App\Responsable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrechaController extends Controller
{
  public function index(){

      $brecha = Responsable::all()->first();

      if($brecha->brecha == false){
        $brecha->brecha = true;
      }else{
        $brecha->brecha = false;
      }

      $brecha->save();


      return redirect('/login');
  }
}
