<h2>Editando el coche con id: <?=$id?></h2>
<form action="index.php?action=update&id=<?=$id?>" method="post">
  <p>
  <label for="">Marca</label>
  <input type="text" name="make" value="<?=$car->make?>">
  </p>
  <p>
  <label for="">Modelo</label>
  <input type="text" name="model" value="<?=$car->model?>">
  </p>
  <p>
  <label for="">Año</label>
  <input type="number" name="year" value="<?=$car->year?>">
  </p>
  <p>
  <label for="">Color</label>
  <input type="color" name="color" value="<?=$car->color?>">
  </p>
  <p>
    <input type="submit" value="Actualizar">
  </p>
  
</form>