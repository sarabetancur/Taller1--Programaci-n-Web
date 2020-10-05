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
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
         <div class="col-4">

         <h6 class="mt-4 text-center"> SALARIO POSTOBÓN </h6>



<form class= "mt-3" action="ejercicio4.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Ingrese cantidad de horas Trabajadas </label>
    <input type="number" class="form-control" placeholder="Cantidad de horas trabajadas" name="cantidadhoras" required>
  </div>
  <button type="submit" class="btn btn-light mt-3 btn-block" name="botonCalcular">Salario Semanal</button>
</form>

<hr>
<br>

</div>
    </div>
        </div>


    <?php if(isset($_POST["botonCalcular"])): ?>
            
    <h4 class="text-center">
    <?php 

    
$cantidad = $_POST["cantidadhoras"]; 

if($cantidad <=40){
  $salario = $cantidad * 20000;
  echo ("El valor de la hora trabajada es de $20000 ");
  echo("<br>");
  echo ("El salario semanal es de: $".$salario);
}

elseif($cantidad>=41){
  $basico = 40*20000;
  $he=$cantidad-40;
  $valorExtra=$he*25000;
  $sal=$basico+$valorExtra;
  echo ("El valor de la hora extra trabajada es de $25000 ");
  echo("<br>");
  echo ("El pago de horas extras es de: $".$valorExtra);
  echo("<br>");
  echo ("El salario semanal es de: $".$sal);

}


     ?>
    </h4>
    <?php endif ?>


</body>
</html>



     
