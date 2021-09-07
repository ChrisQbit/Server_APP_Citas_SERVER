<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class APIBotonController extends Controller
{
    //

    public function welcome()
    {
        $ticket = DB::table('beacon_ticket')->where('status',1)->first();
        return view('welcome')->with('ticket',$ticket);
    }

    public function login_app(Request $request)
    {
      $data = json_decode($request->getContent(), true);
      $user = DB::table('users_api')->where('mail', $data["mail"] )
      ->where('password', $data["password"] )->first();
      $token = "OK00".random_int(100000, 999999);
      if(!$user){ $token= "unauthorized"; $user_s = ""; $movil_s = ""; $us_id="0"; $email_s = ""; }
      else{ $user_s = $user->nombre; $movil_s = $user->numero_movil; $us_id=$user->id; $email_s = $user->mail; }
      return response()->json([
        'name' => $user_s,
        'movil' => $movil_s,
        'email' => $email_s,
        'token' => $token,
        'id' => $us_id.""
      ], 200);
    }


    public function getAdress_app(Request $request)
    {
      $data = json_decode($request->getContent(), true);
      $address = DB::table('address')->where('user_id', $data["user_id"]  )->first();

      return response()->json([
        "calle_numero" => $address->calle_numero,
        "colonia_estado" => $address->colonia_estado,
        "codigo_postal" => $address->codigo_postal
      ], 200);
    }






        public function update_perfil(Request $request)
        {
          $data = json_decode($request->getContent(), true);
          if($data["password"] != ""){
            $update = DB::table('users_api')
                  ->where('id', $data["user_id"])
                  ->update([
                    'nombre' => $data["nombre"],
                    'password' => $data["password"],
                    'numero_movil' => $data["mobil"],
                    'mail' => $data["mail"]
                  ]);
          }else{
            $update = DB::table('users_api')
                  ->where('id', $data["user_id"])
                  ->update([
                    'nombre' => $data["nombre"],
                    'numero_movil' => $data["mobil"],
                    'mail' => $data["mail"]
                  ]);
          }
        }







          public function update_address(Request $request){
            $data = json_decode($request->getContent(), true);

              $update = DB::table('address')
                    ->where('id', $data["user_id"])
                    ->update([
                      'calle_numero' => $data["calle"],
                      'colonia_estado' => $data["colonia"],
                      'codigo_postal' => $data["cp"]
                    ]);

          return response()->json(["update" => "success"], 200);
        }





        public function cancel_cita(Request $request){
          $data = json_decode($request->getContent(), true);

            $update = DB::table('citas_disponibles')
                  ->where('id', $data["cita_id"])
                  ->where('user_id', $data["user_id"])
                  ->update([
                    'status' => 3
                  ]);
        return response()->json(["cancel" => "success"], 200);
        }

    public function get_empresas(Request $request)
    {
      $data = json_decode($request->getContent(), true);
      $emp = DB::table('empresas')->get();
      if($emp){ return response()->json($emp, 200); }else{
        return response()->json(["error" => "No hay empresas"], 401);
      }
    }


    public function get_historial(Request $request)
    {
      $data = json_decode($request->getContent(), true);
      $historial = DB::table('citas_disponibles')->where('user_id', $data["user_id"]  )->where('status','<>',3)
      ->orderBy('status', 'desc')->get();
      if($historial){ return response()->json( $historial, 200); }else{return response()->json( ["error"=>"sin citas"], 401);}

    }



    public function get_citas(Request $request)
    {
      $data = json_decode($request->getContent(), true);
      $citas = DB::table('citas_disponibles')->where('status','<>','0')->where('user_id','0')
      ->where('id_empresa', $data["id_empresa"]  )->get();
      if($citas){return response()->json( $citas, 200);}else{return response()->json( ["error"=>"sin citas"], 401);}

    }





        public function get_citas_v2(Request $request)
        {
          $data = json_decode($request->getContent(), true);
          // 1- Aqui primero llamo la empresa que contenga el combre
          $emp = DB::table('empresas')->where('nombre','like','%'.$data["id_empresa"].'%')->first();
          // 2- despues llamo sus citas_disponibles
          $citas = DB::table('citas_disponibles')->where('status','<>','0')->where('user_id','0')
          ->where('id_empresa', $emp->id  )->get();

          // 3- regreso las citas igual
          if($citas){return response()->json( $citas, 200);}else{return response()->json( ["error"=>"sin citas"], 401);}
        }



        public function agendar(Request $request)
        {

          $data = json_decode($request->getContent(), true);
          //dd(substr($data["fecha_hora"],0,10),$data["id_empresa"],$data["user_id"]);
          // 1- Aqui primero llamo la empresa que contenga el combre

          $emp = DB::table('empresas')->where('nombre','like','%'.$data["id_empresa"].'%')->first();
          // 2- Recortar fecha y buscar por like


          $update = DB::table('citas_disponibles')
                ->where('id_empresa', $emp->id)
                ->where('fecha_cita', 'like' , '%'.substr($data["fecha_hora"], 0, 10).'%'  )
                ->update([
                  'user_id' => $data["user_id"]
                ]);
          // 3- regreso las citas igual
           return response()->json( ["cita"=>"success"], 200);
        }

    public function boton_find_ticket(Request $request)
    {
      $data = json_decode($request->getContent(), true);
      $ticket = DB::table('beacon_ticket')
                ->where('status', 0)
                ->update([
                  'status' => 1,
                  'uuid' => $data["uuid"]
                ]);

                $ticket = DB::table('beacon_ticket')
                          ->where('user_id', 1)->first();
      return response()->json([
        'ticket: ' => $ticket->ticket
      ], 200);
    }





    public function registro_app(Request $request)
    {
      $data = json_decode($request->getContent(), true);
      $new = DB::table('users_api')->insert([
          'nombre' => $data["nombre"],
          'mail' => $data["email"],
          'password' => $data["password"],
          'numero_movil' => $data["mobil"],
      ]);
      return response()->json([
        'registro ' => 'success'
      ], 200);
    }





}
