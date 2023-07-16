<?php 

$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="oradores";

 $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

 if(!$enlace){
    echo"no se pudo conectar";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Conf Bs As</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <!-- servicio de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- <link rel="stylesheet" media="only screen and (min-device-width:320px) and (max-device-width: 2048px) " href="style.css"> -->

    <link rel="stylesheet" type="text/css" href="estilo.css">

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->   
</head>
<body>
    <header>
        <div class="txt-Conf">
            <img class="imagen-logo" src="codoacodo.png" alt="logo" style="width:100px; height:70px; margin-left: 30px;">
        </div>
        <h2 style="text-align:left;  margin-left: 30px; margin-top: 20px;">Conf Bs As</h2>
        <div class="txt  aling-items-left">
            <!-- <a href="#oradores" >Ver Oradores  </a> -->
            <div class="row justify-content-end">
              <a  class="inicio" href="">Inicio</a>
                <a  class="inicio" href="http://localhost/phpmyadmin/sql.php?db=oradores&table=datos&pos=0">Uso Interno</a>
            </div>
        </div>
  
    </header>
    <div class="tabla">
        <form action="carga.php" method="POST">
            <table>
                <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Tema</th>
                    </tr>
                </thead>  


  <?php

   $consulta = "SELECT * FROM  datos";

    $ejecutar = mysqli_query($enlace, $consulta);

    while ($fila = mysqli_fetch_array($ejecutar)){

  ?>
  <tr>
    <td><?php echo $fila['nombre']?></td>
    <td><?php echo $fila['apellido']?></td>
    <td><?php echo $fila['tema']?></td>
  </tr>
<?php
}
  ?>
                    
       <!--              
           </thead>   -->
          <!-- <tbody id="tabla_dato"></tbody> -->
          </table>    
        </form>    
    </div> 



</body>
</html> 