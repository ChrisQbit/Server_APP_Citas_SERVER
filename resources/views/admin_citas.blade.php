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

                  <h3>{{ __('Administra tus Citas') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                <div class="row">
                  <div class="col-md-6" style="height:500px; overflow-y: auto;">
                    <div class="container">
                      <h4>Crear Citas:</h4>
                      <div class="card card-default">
                        <div class="card-header">Creación de Citas para la App</div>
                        <div class="card-body">

                          <form method="post" action="/guardar_cita">
                            @csrf
                            <label>Añade una Hora:</label>
                            <input class="form-control" name="hora" type="time"
                             placeholder="Formato: 00:00AM ó 00:00PM" required>
                              <label>Fecha de la Cita:</label>
                            <input class="form-control" name="fecha"
                            type="date" min="2020-01-01" max="2040-12-31" required>
                            <hr>
                            <button class="btn btn-outline-primary">
                              Guardar Nueva <i class="fas fa-check-double"></i>
                            </button>
                          </form>

                          <hr>

                          <a href="/citas_canceladas">
                          <button class="btn btn-danger" style="width:80%;">Citas Canceladas
                            <i class="fas fa-users"></i>
                             <i class="fas fa-window-close"></i></button>
                           </a>

                          <hr>
                          <a href="/citas_confirmadas">
                          <button class="btn btn-primary" style="width:80%;">Citas Confirmadas
                            <i class="fas fa-users"></i>
                            <i class="fas fa-check-circle"></i>
                          </button>
                        </a>
                          <hr>

                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6" style="height:500px; overflow-y: auto;">
                    <div class="container">
                      <h4>Mis Citas Activas:</h4>
                      <div class="card card-secondary">
                        <div class="card-header">Panel Heading</div>
                        <div class="card-body">





                          <table class="table table-sm table-hover">
                            <thead>
                              <tr>
                                <th scope="col">IDE</th>
                                <th scope="col" class="text-center">Disponible</th>
                                <th scope="col">Fecha y Hora</th>
                                <th scope="col">Acción</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if($citas)
                                @foreach($citas as $c)

                                  <tr>
                                    <th scope="row">{{$c->id}}</th>
                                    <td class="text-center">
                                      @foreach($users_app as $app) @if($c->user_id == $app->id) {{$app->nombre}} @else
                                      <i class="fas fa-user"></i>
                                       @endif @endforeach</td>
                                    <td>{{ $c->fecha_cita." ".$c->hora }}</td>
                                    <td>
                                      <button class="btn btn-sm btn-outline-danger">
                                        Cancelar
                                      <i class="fas fa-window-close"></i></button>
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
                </div>




                </div>
            </div>
        </div>


            </div>
        </div>













@endsection
