<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <base href='{$BASE_URL}' >


  <title>Supermecado Marano</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">MHS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="inicio">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categorias">categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nosotros">nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="producto">productos</a>
          </li>
           {if isset($userName)}
         <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="logout">LOGOUT</a>
        </div>
                {/if}
                         {if !isset($userName)}
         <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="login">iniciar sesion</a>
        </div>
                {/if}
        </ul>
      </div>
    </div>
  </nav>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>