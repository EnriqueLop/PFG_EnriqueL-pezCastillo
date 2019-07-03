<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Colegio;
use App\Clase;
use App\Hijo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      //GESTIÓN DEL USUARIO ADMINISTRADOR
      if(User::all()->count()==0 &&
          $data['name'] == 'Admin' &&
          $data['email'] == 'admin@gmail.com' &&
          $data['password'] == 'contraseña1'){
            $usuario = new User;
            $usuario -> name = $data['name'];
            $usuario -> email = $data['email'];
            $usuario -> password = Hash::make($data['password']);
            $usuario -> role_id = 1;

      }

      //SE CREA EL NUEVO USUARIO
      $usuario = new User;
      $usuario -> name = $data['name'];
      $usuario -> email = $data['email'];
      $usuario -> password = Hash::make($data['password']);

      //SE OBTIENEN LOS COLEGIOS Y LAS CLASES PARA LAS COMPROBACIONES
      $colegios = Colegio::where('codigo', $data['codigo'])->get();
      $clases = Clase::where('codigo', $data['codigo'])->get();
      if($colegios->count() != 0){// CREAR UN DIRECTOR
        $colegio = $colegios->first();
        $usuario -> colegio_id = $colegio->id;
        $usuario -> role_id = 2;

        $usuario -> save();

        $colegio -> codigo = null;
        $colegio -> save();

      }elseif($clases->count() != 0){       //CREAR UN PROFESOR O AÑADIR ALUMNOS
        $clase = $clases->first();

        if(User::where('clase_id',$clase->id)->get()->count() == 0 ){ //SI NO EXISTE NADIE SE CREA UN PROFESOR
          $usuario -> role_id = 3;
          $usuario -> clase_id = $clase->id;
          $usuario -> save();

        }else{  // SI EXISTE ALGUIEN SE CREA UN TUTOR
          $usuario -> role_id = 4;
          $usuario -> save();

          //UNA VEZ GUARDADO EL USUARIO RECIÉN CREADO SE CREA A SU HIJO CORRESPONDIENTE.
          $hijo = new Hijo;
          $hijo -> user_id = User::all()->last()->id;
          $hijo -> clase_id =  $clase->id;
          $hijo->save();

        }





        $clase -> codigo = null;
        $clase -> save();
      }


      //CREAR UN TUTOR




      return $usuario;
    }
}
