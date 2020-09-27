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
        <a class="nav-link" href="ejercicio4.php">Ejercicio 4</a>
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
                
<form class= "mt-3" action="ejercicio4.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Cantidad Horas Trabajadas</label>
    <input type="number" class="form-control" placeholder="Horas trabajadas" name="ht">
  </div>

  
  <button type="submit" class="btn btn-light mt-3 btn-block" name="botonCalcular">CALCULAR</button>
</form>

<hr>

</div>
    </div>
        </div>
     
          
<?php if(isset($_POST["botonCalcular"])):?>
 
  
  <h4 class="text-center">

  <?php
 
        $horas = $_POST["ht"]; 
        $he=25000;
	  
	
	if($horas <40){
      $sueldo = $horas*20000;
      echo ("Su sueldo semanal es de ".$sueldo);
	    
	
	
  }elseif($horas > 40){
    $sueldo = $horas*20000;
      echo ("Su sueldo semanal es de ".$sueldo);
	    }
	
	
	?> 

</h4> 
<?php endif ?>

</body>
</html>

