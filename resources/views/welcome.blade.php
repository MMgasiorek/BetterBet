<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <script src="{{ asset('js/loader.js') }}" defer></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body onload="myFunction()" style="margin:0;">

  <div id="loader">
  <img src="img/app/loader.bmp">
  </div>

<div style="display:none;" id="myDiv" class="animate-bottom">

<div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand me-auto" href="#">
                        <img src="img/app/logo_blue.bmp" alt="Logo" class="navbar img">
                    </a>
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('login') }}">
                            <button type="button"  class="btn-logreg">Login</button>
                        </a>
                        <a href="{{ route('register') }}">
                            <button type="button"  class="btn-logreg">Register</button>
                        </a>                    
                    </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 mt-5 text-center">
                <div class="row">
                    <div class="col-12 mt-4 mb-4">
                        <h1 class="text-black big_font alkat"><bold>Better Solutions For Gamers</bold></h1>
                    </div>
                    <div class="col-12 ">
                        <h6 class="text_blue alkat">
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </h6>
                    </div>
                    <div class="col-12 mt-4 mb-4">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('login') }}">
                                    <button type="button" href="{{ route('login') }}" class="btn-logreg">Login</button>
                                </a>    
                            </div>
                            <div class="col-6">
                                <a href="{{ route('register') }}">
                                    <button type="button" href="{{ route('register') }}" class="btn-logreg">Register</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 image-container">
                <img src="img/graph/10.png" class="image-floating">
            </div>
        </div>



    </div>

    <div class="container-fluid">
        <div class="row bg-dark">
            <div class="col-3">
                <div class="card mt-3 mb-3">
                    <div class="card-header">
                        <h3 class="alkat">Beetween team</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/graph/1.png" class="img-fluid card-image">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mt-3 mb-3">
                    <div class="card-header">
                        <h3 class="alkat">Just Fun</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/graph/2.png" class="img-fluid card-image">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mt-3 mb-3">
                    <div class="card-header">
                        <h3 class="alkat">Zero sum game</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/graph/3.png" class="img-fluid card-image">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mt-3 mb-3">
                    <div class="card-header">
                        <h3 class="alkat">No Taxes</h3>
                    </div>
                    <div class="card-body">
                        <img src="img/graph/4.png" class="img-fluid card-image">
                    </div>
                </div>
            </div>
   

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>