<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playlist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--Stilos-->
    <link rel="stylesheet" href="{{asset('css/boton_inicio.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="bg__container">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">PLAYLIST MUSIC PERÚ
                    <!--<img  src="img/logos/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">-->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div   class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="">Home</a>
                        </li>
                           <!-- Menú desplegable para Usuario y Administrador -->
        <!-- Menú desplegable para Usuario y Administrador -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
            Iniciar Sesión
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Usuario</a>
              <a class="dropdown-item" href="#">Administrador</a>
              <!-- Puedes agregar más opciones si es necesario -->
            </div>
          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="texto" id="home">
            <h4 class="text-white" style="font-family: 'Playfair Display', serif;">Tu playlist</h4>
            <h3 class="text-white" style="font-family: 'Quicksand', sans-serif;">PLAYLIST MUSIC PERÚ</h3>
            <a href="" class="btn text-white btn-31"  style="font-family: 'Quicksand', sans-serif; font-size:15px;background: rgb(0, 0, 0) 42)"> <span class="text-container"><span class="text">Escuchar</span> </span></a>
        </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-dJfzx6CBA6P1tZmDD5R3clnKvoC2KthD8eG0tO3lAaKh/Nsz5lFfWrvG4lKs6O5h"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyhEmiPDVtR63R2ExQ6ckGoA1D5gIepoH"
    crossorigin="anonymous"></script>
</body>
</html>
