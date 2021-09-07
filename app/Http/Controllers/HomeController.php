<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $user = Auth::user();
      $empresa = DB::table('empresas')->where('id',$user->id)->first();
        return view('home')->with('user',$user)->with('empresa',$empresa);
    }

    public function logout()
    {
      Auth::logout();
        return redirect('/login');
    }

    public function admin_citas()
    {
      $user = Auth::user();
      $hoy = Carbon::today();
      $cts = DB::table('citas_disponibles')->where('id_empresa',$user->id)->where('user_id',0)
      ->where('status',1)->where('fecha_cita','>=',$hoy)->orderByDesc('id')->get();
      $users_app = DB::table('users_api')->get();
      return view('admin_citas')->with('user',$user)->with('citas',$cts)->with('users_app',$users_app);
    }

    public function citas_canceladas()
    {
      $user = Auth::user();
      $cts = DB::table('citas_disponibles')->where('id_empresa',$user->id)
      ->where('status',3)->orderByDesc('id')->get();
      $users_app = DB::table('users_api')->get();
        return view('citas_canceladas')->with('user',$user)->with('citas',$cts)->with('users_app',$users_app);
    }

    public function cancel_cita_web(Request $request)
    {
      $update = DB::table('citas_disponibles')
            ->where('id', $request->ide_cita)
            ->update([
              'status' => 0
            ]);
        return redirect('/citas_proximas');
    }

    public function mis_afiliados()
    {
      $user = Auth::user();
      $last = 0;
      $cts = DB::table('citas_disponibles')->where('id_empresa',$user->id)->
      where('user_id','<>',0)->distinct()->orderByDesc('id')->get();
      foreach ($cts as $key) {
          if($last == $key->user_id){
                // aqui remuevo repetidos
                $cts->forget($key);
          }
          $last = $key->user_id;
      }
      $users_app = DB::table('users_api')->get();
        return view('mis_afiliados')->with('user',$user)->with('citas',$cts)->with('users_app',$users_app);
    }


    public function citas_confirmadas()
    {
      $user = Auth::user();
      $cts = DB::table('citas_disponibles')->where('id_empresa',$user->id)
      ->where('status',0)->orderByDesc('id')->get();
      $users_app = DB::table('users_api')->get();
        return view('citas_confirmadas')->with('user',$user)->with('citas',$cts)->with('users_app',$users_app);
    }


    public function citas_proximas()
    {
      $user = Auth::user();
      $cts = DB::table('citas_disponibles')->where('id_empresa',$user->id)
      ->where('status',1)->where('user_id','<>',0)->orderByDesc('id')->get();
      $users_app = DB::table('users_api')->get();
        return view('citas_proximas')->with('user',$user)->with('citas',$cts)->with('users_app',$users_app);
    }


    public function citas_pasadas()
    {
      $user = Auth::user();
        $hoy = Carbon::today();
      $cts = DB::table('citas_disponibles')->where('id_empresa',$user->id)
      ->where('status',1)->where('fecha_cita','<',$hoy)->orderByDesc('id')->get();
      $users_app = DB::table('users_api')->get();
        return view('citas_pasadas')->with('user',$user)->with('citas',$cts)->with('users_app',$users_app);
    }

    public function guardar_cita(Request $request)
    {
      $user = Auth::user();
        //dd($request);
        $new = DB::table('citas_disponibles')->insert([
            'id_empresa' => $user->id,
            'hora' => $request->hora,
            'fecha_cita' => $request->fecha,
            'user_id' => 0,
        ]);
      return redirect('/admin_citas');
    }

}
