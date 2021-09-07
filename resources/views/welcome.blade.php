<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="refresh" content="10; URL=https://1b59-189-203-6-193.ngrok.io">-->
        <title>Listen BOTON</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
      @if($ticket)
    <body class="container" style="padding:15%; background-color:#03fc35;">
            <div class="panel panel-success">
                <div class="panel-body text-center bg-success">
                  <h1>
                    Terminal: {{$ticket->uuid}}
                    <hr>
                    Ticket: {{$ticket->ticket}}</h1>
                </div>
              </div>
    </body>
              @else
  <body class="container" style="padding:15%; background-color:#fc1703;">
              <div class="panel panel-danger text-center">
                  <div class="panel-body bg-danger">
                      <h1>
                        Acceso Botòn
                        <hr>
                        Genera tu entreada en APP.</h1>
                  </div>
                </div>
  </body>
              @endif










</html>
