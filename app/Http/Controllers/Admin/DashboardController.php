<?php

namespace App\Http\Controllers\Admin;

Use App\Colegio;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function index(){
      $colegios = Colegio::all();

      $codigo = '';
      $longitud = 15;
      $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
      $max = strlen($pattern)-1;
      for($i=0;$i < $longitud;$i++) $codigo .= $pattern{mt_rand(0,$max)};

      Toastr::success('Correo enviado correctamente', 'Success');
      return view('admin.dashboard',compact('colegios', 'codigo'));
  }
}
