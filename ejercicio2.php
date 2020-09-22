<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 1 Programación Web</title>

    <link href="estilos.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="fondo">
    
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php">T A L L E R 1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="ejercicio1.php">Ejercicio 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ejercicio3.php">Ejercicio 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ejercicio 4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ejercicio 5</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
         <div class="col-4">

         <h6 class="mt-4 text-center"> INGRESE LOS SIGUIENTES DATOS </h6>
                
<form class= "mt-3" action="ejercicio2.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Ingresa tu peso</label>
    <input type="number" class="form-control" placeholder="Peso" name="peso">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ingresa tu altura</label>
    <input type="number" class="form-control" placeholder="Altura" name="altura">
  </div>
  <button type="submit" class="btn btn-light mt-3 btn-block" name="botonCalcular">CALCULAR</button>
</form>

<hr>
<br>

</div>
    </div>
        </div>


        <?php if(isset($_POST["botonCalcular"])): ?>
            
    <h4 class="text-center">
     <?php 

    $altura=$_POST["altura"];
    $peso=$_POST["peso"];
    $imc=$peso/$altura*$altura;
    
    if ($imc < 18.5){
      echo("Su peso es insuficiente, es de".$imc);
    }

    elseif($imc>= 18.5 &&24.9){
      echo("Su peso es normal, es de".$imc);
    }
    
     ?>
    </h4>

    <?php endif ?>


   

</body>
</html>



     
