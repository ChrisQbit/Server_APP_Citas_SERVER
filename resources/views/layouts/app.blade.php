<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e838e8d238.js" crossorigin="anonymous"></script>

    <style>
    /*footer*/
    .col_white_amrc { color:#FFF;}
    footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;}
    .pt2 { padding-top:40px ; margin-bottom:20px ;}
    footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
    .mb10 { padding-bottom:15px ;}
    .footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
    .footer_ul_amrc li {padding:0px 0px 5px 0px;}
    .footer_ul_amrc li a{ color:#CCC;}
    .footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
    .fleft { float:left;}
    .padding-right { padding-right:10px; }

    .footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
    .footer_ul2_amrc li p { display:table; }
    .footer_ul2_amrc li a:hover { text-decoration:none;}
    .footer_ul2_amrc li i { margin-top:5px;}

    .bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
    .foote_bottom_ul_amrc {
    	list-style-type:none;
    	padding:0px;
    	display:table;
    	margin-top: 10px;
    	margin-right: auto;
    	margin-bottom: 10px;
    	margin-left: auto;
    }
    .foote_bottom_ul_amrc li { display:inline;}
    .foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

    .social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
    .social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
    .social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
    .social_footer_ul li i {  width:20px; height:20px; text-align:center;}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                 aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                @if(isset($user))

                  <b>
                    <a href="/logout" style="color:#000;">
                      Cerrar Session <i class="fas fa-sign-out-alt"></i></button>
                    </a>
                  </b>
                @endif


            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<h1><center>DaterPlus+ Sistema Administrador de Citas
  <i class="fas fa-clipboard-list"></i></center></h1>

<!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Contacto</h5>
<!--headin5_amrc-->
<p class="mb10">Sistema de gestion de citas para tu negocio, bajo Ambiente Mobil y Administrativo Web.</p>
<p><i class="fa fa-location-arrow"></i> Guadalajara Jalisco, Mexico. </p>
<p><i class="fa fa-phone"></i>  +52 3317521644  </p>
<p><i class="fa fa fa-envelope"></i> programaemx@gmail.com  </p>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Cuantic Studios</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="https://play.google.com/store/apps/details?id=com.CuanticGames.TitanSurvivalMobile2">Android VideoGames</a></li>
<li><a href="https://github.com/ChrisQbit">Github Coding</a></li>
<li><a href="http://webenlance.com">Facebook Perfil</a></li>
<li><a href="http://webenlance.com">Youtube Channel</a></li>
<li><a href="http://webenlance.com">Politicas de Privacidad</a></li>
<li><a href="http://webenlance.com">Cuantic Studios</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Otras Plataformas</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Blockchain</a></li>
<li><a href="http://webenlance.com">Tiendas E-comerce</a></li>
<li><a href="http://webenlance.com">Sistemas ERP</a></li>
<li><a href="http://webenlance.com">IOS App</a></li>
<li><a href="http://webenlance.com">Android Apps</a></li>
<li><a href="http://webenlance.com">IOT IBeacons</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Siguenos en Twitter</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i>
</a><p>Desarrollos tecnologicos y consultoria a buen precio.
  <a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i>
</a><p>Nuevos Lanzamientos disponibles en playstore.
  <a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i>
</a><p>Precios Accesibles en Desarrollos...<a href="#">https://www.lipsum.com/</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="/">Inicio</a></li>
<li><a href="http://webenlance.com">Avisos de Privacidad</a></li>
<li><a href="http://webenlance.com">Cerrar Sesion</a></li>
<li><a href="/admin_citas">Mis Citas</a></li>
<li><a href="/login">Acceder</a></li>
<li><a href="/register">Registrarse</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2017 | Diseño y Desarrollo by <a href="#">Cuantic Studios. Ing. Christian Padilla</a></p>

<ul class="social_footer_ul">
<li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>
<script>

</script>
</footer>
</html>
