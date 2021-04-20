<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Projecte d'accés a BD MySQL amb Laravel 8</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   </head>
   <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="/"><h1>Home</h1></a>
                </nav>
            </div>
            <!--<img style="display: block; position: relative; width: 15%; left: 600px; bottom: 360px;" src="{{URL('images/LogoMakr-5rkgj1.png')}}" width="280" height="105" title="Logo" alt="Logo">-->
            <div class="container-fluid">
                <img src="{{URL('images/LogoMakr-5rkgj1.png')}}" width="125px" style="position: relative; left: 70%;" title="Logo" alt="Logo">
            </div>
        </nav>
      <div class="container">
         @yield('content')
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>

   </body>
</html>
