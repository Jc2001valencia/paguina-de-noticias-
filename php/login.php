<?php

session_start();

include'conexion.php';


$email_username =$_POST['email_username'];
$password =$_POST['password'];

$validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email_username' AND password = '$password'");


if(mysqli_num_rows($validar_login)>0){
    $_SESSION['usuario'] = $email_username;
    header("location: home.php");
exit;
}else{
    echo'
    <script>
    
    alert("usuario no se encuentra registrado o verifica tus datos")

    window.location="../index.php";
    </script>
    ';
    exit;
}


?>