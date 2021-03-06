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
                <div class="card-header">{{ __('Bienvenide') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<div class="row">
  <div class="col-md-6">
      <h4>{{ $user->name }}</h4>
  </div>
  <div class="col-md-6">
      <h4> T?? Empresa: {{ $empresa->nombre }}</h4>
  </div>
</div>




                </div>
            </div>
        </div>


            </div>
        </div>





  <section class="our-webcoderskull padding-lg" style="margin-top:-12%;">
          <div class="container">
            <div class="row heading heading-icon">
                <h2>Our Team</h2>
            </div>
            <ul class="row">
              <li class="col-12 col-md-6 col-lg-3">
                  <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
                    <h3><a href="/admin_citas">Administrar Citas</a></h3>
                    <p>A??ade, Edita ?? Elimina tus Citas.</p>
                    <ul class="follow-us clearfix">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
              </li>
              <li class="col-12 col-md-6 col-lg-3">
                  <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
                    <h3><a href="/citas_proximas">Pr??ximas Citas </a></h3>
                    <p>Consulta y preparate para atender tus citas.</p>
                    <ul class="follow-us clearfix">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
              </li>
              <li class="col-12 col-md-6 col-lg-3">
                  <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
                    <h3><a href="/mis_afiliados">Mis Afiliados / Clientes </a></h3>
                    <p>Consulta tu cartera de clientes</p>
                    <ul class="follow-us clearfix">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
               </li>
              <li class="col-12 col-md-6 col-lg-3">
                  <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
                    <h3><a href="/citas_pasadas">Citas Pasadas</a></h3>
                    <p>Las Citas, Olvidadas del pasado, limpiar tu stock de citas.</p>
                    <ul class="follow-us clearfix">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
              </li>
            </ul>
          </div>
        </section>









@endsection
