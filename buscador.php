<?php
  require('./registro.php');
  $filtroCiudad=$_GET['filtro']['Ciudad'];
  $filtroTipo=$_GET['filtro']['tipo'];
  $filtroPrecio=$_GET['filtro']['precio'];
  $obtenerDatos=leerDatos();
  filtrarDatos($filtroCiudad,$filtroTipo,$filtroPrecio,$obtenerDatos)
 ?>
