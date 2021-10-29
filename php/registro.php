<?php

include'conexion.php';

$nombre = $_POST['nombre'];
$apellido =$_POST['apellido'];
$email =$_POST['email'];
$password =$_POST['password'];
$telefono =$_POST['telefono'];




//INSERT INTO `usuarios` (`nombre`, `apelllidos`, `email`, `telefono`, `password`, `id`)
// VALUES ('$nombre', '$apellido', '$email', '$telefono', '$password', NULL), ('', '', '', '', '', NULL);


$query ="INSERT INTO `usuarios`(`nombre`, `apelllidos`, `email`, `telefono`, `password`, `id`)
         VALUES ('$nombre', '$apellido', '$email', '$telefono', '$password', NULL)";


$ejecutar=mysqli_query($conexion, $query);

if($ejecutar){
    echo'
    <script>
    
    alert("usuario almacenado exitosamente")

    window.location="../index.php";
    </script>
    ';
}else{
    echo'
    <script>
    
    alert("intentalo de nuevo")

    window.location="../index.php";
    </script>
    ';
}

mysqli_close($conexion);

?>