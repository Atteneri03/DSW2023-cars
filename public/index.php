<?php
  require_once "../src/models/Car.php";
  require_once "../src/controllers/CarController.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Ejercicio de coches</h1>
    <?php
    $controller = new CarController();

    if(isset($_GET["id"])){
      $controller->show($_GET["id"]);
    } else {
      $controller->list();
    }
    
    ?>
</body>
</html>