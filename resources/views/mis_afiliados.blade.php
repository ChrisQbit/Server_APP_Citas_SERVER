<title>{{ config('app.name', 'Citas') }}</title>
<style>
.row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
	display: block;
	padding-top: 60px;
	padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{
     border:1px solid #999999;
	 text-align:center;
	 margin-bottom:28px;
	 padding:40px 25px;
}
.our-webcoderskull .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{
    color:#3c3c3c;
	font-size:24px;
	font-weight:500;
	font-family: 'Poppins', sans-serif;
	padding: 10px 0;
}
.practice-area .inner p{
    font-size:14px;
	line-height:22px;
	font-weight:400;
}
.practice-area .inner img{
	display:inline-block;
}

.our-webcoderskull .cnt-block{
  cursor: pointer;
   float:left;
   width:100%;
   background:#fff;
   padding:30px 20px;
   text-align:center;
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{
   width:148px;
   height:148px;
   border-radius:100%;
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{
   width:148px;
   height:148px;
   border-radius:100%;
}
.our-webcoderskull .cnt-block h3{
   color:#2a2a2a;
   font-size:20px;
   font-weight:500;
   padding:6px 0;
   text-transform:uppercase;
}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
	color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
	color:#337ab7;
}
.our-webcoderskull .cnt-block p{
   color:#2a2a2a;
   font-size:13px;
   line-height:20px;
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
	margin:20px 0 0;
}
.our-webcoderskull .cnt-block .follow-us li{
    display:inline-block;
	width:auto;
	margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fa{
   font-size:24px;
   color:#767676;
}
.our-webcoderskull .cnt-block .follow-us li .fa:hover{
   color:#025a8e;
}
</style>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                  <h3 class="text-primary">{{ __('Mis Afiliados / Clientes') }} <i class="fas fa-users"></i></h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                <div class="row">



                  <div class="col-md-8" style="height:500px; overflow-y: auto;">
                    <div class="container">
                      <h4 class="text-primary">Afiliados:</h4>
                      <div class="card card-secondary">
                        <div class="card-header">Usuarios de Aplicación</div>
                        <div class="card-body">





                          <table class="table table-sm table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Afiliado</th>
                                <th scope="col">Contacto <i class="fas fa-phone-volume"></i></th>
                                <th scope="col">Mail</th>
                                <th scope="col" class="text-center">Tipo</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if($users_app)
                                @foreach($users_app as $c)

                                  <tr>
                                    <th scope="row">{{$c->id}}</th>
                                    <td>
                                       {{$c->nombre}}
                                     </td>
                                    <td>

                                         {{$c->numero_movil}}


                                      </td>
                                    <td>{{ $c->mail }}</td>
                                    <td class="text-center">

                                        Usuario Mobil <i class="fas fa-mobile-alt"></i>

                                    </td>
                                  </tr>
                                @endforeach
                              @endif


                            </tbody>
                          </table>







                        </div>
                      </div>
                    </div>
                  </div>













                  <div class="col-md-4" style="height:500px; overflow-y: auto;">
                    <div class="container">
                      <h4 class="text-light" style="color:#fff;">Crear Citas:</h4>
                      <div class="card card-default">
                        <div class="card-header">Mensaje de Sistema:</div>
                        <div class="card-body">


                          <div class="alert alert-primary" role="alert">
                            <strong>Grandioso!! Clientes activos. <i class="fas fa-users"></i></strong>
                            <hr>
                            Estos clientes tienes alguna cita activa contigo, preparate y da el mejor servicio para generar lealtad.
                            Buen trabajo.<br>
                            Dile a tus clientes que descarguen la app.
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>





                </div>




                </div>
            </div>
        </div>


            </div>
        </div>













@endsection
