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

         <h6 class="mt-4 text-center"> PROMOCIÓN SPRING STEP </h6>



<form class= "mt-3" action="ejercicio3.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Cantidad de zapatos </label>
    <input type="number" class="form-control" placeholder="Cantidad de zapatos comprados" name="cantidadZapatos" required>
  </div>
  <button type="submit" class="btn btn-light mt-3 btn-block" name="botonCalcular">Valor de la Compra</button>
</form>

<hr>
<br>

</div>
    </div>
        </div>


    <?php if(isset($_POST["botonCalcular"])): ?>
            
    <h4 class="text-center">
    <?php 

    
$cantidad = $_POST["cantidadZapatos"]; 
$precio1= 30000;
$precio2= 40000;
$precio3= 50000;


if ($cantidad <=2){
  echo("El precio de cada par de zapatos es: " .$precio1);
  echo("<br>");
  $totalcompra=($cantidad)*($precio1);
  echo("El valor total de la compra es: ".$totalcompra);
  echo("<br>");
  echo("No tiene descuento");
 
 }

elseif($cantidad ==3){
  echo("El precio de cada par de zapatos es: " .$precio1);
  echo("<br>");
  $totalcompra=($cantidad)*($precio1);
  echo("El valor total de la compra sin descuento es: ".$totalcompra); 
  echo("<br>");
  $totaldescuento=$totalcompra-($totalcompra*0.10);
  echo ("El valor de compra con un descuento del 10% es: ".$totaldescuento);
  

}elseif (($cantidad >=4) and($cantidad <=8)){
  echo("El precio de cada par de zapatos es: " .$precio2);
  echo("<br>");
  $totalcompra=($cantidad)*($precio2);
  echo("El valor total de la compra sin descuento es: ".$totalcompra); 
  echo("<br>");
  $totaldescuento=$totalcompra-($totalcompra*0.20);
   echo ("El valor de compra con un descuento del 20% es: ".$totaldescuento);
 }

elseif ($cantidad >=9){
  echo("El precio de cada par de zapatos es: " .$precio3);
  echo("<br>");
  $totalcompra=($cantidad)*($precio3);
  echo("El valor total de la compra sin descuento es: ".$totalcompra);
  echo("<br>");
  $totaldescuento=$totalcompra-($totalcompra*0.50);
   echo ("El valor de compra con un descuento del 50% es: ".$totaldescuento);
 }




     ?>
    </h4>
    <?php endif ?>


</body>
</html>



     
