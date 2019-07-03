<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use App\Hijo;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {


      Hijo::where('user_id',null)->delete();

        if (Auth::guard($guard)->check() && Auth::user()->role->id==1) {
            return redirect()->route('admin.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->role->id==2){
            return redirect()->route('director.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->role->id==3){

            return redirect()->route('profesor.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->role->id==4){

                    $hijos = Hijo::where('user_id',Auth::user()->id)->get();
                    if ($hijos->count() == 0){
                      return $next($request);
                    }

                    foreach ($hijos as $hijo) {
                      if($hijo->clase_id == null){
                        return redirect('/derechos/rectificar');
                      }
                    }

                      return redirect()->route('tutor.dashboard');

        }elseif(Auth::guard($guard)->check() && Auth::user()->role->id==5){

                    return redirect()->route('comedor.dashboard');

        }else{
            return $next($request);
        }
    }
}
