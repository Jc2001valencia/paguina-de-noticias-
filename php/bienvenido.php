
<?php

session_start();
if(!isset($_SESSION['usuario'])){

    echo'
    <script>
    
    alert("por favor debes iniciar sesion")

    window.location="../index.php";
    </script>
    ';
   
    
    session_destroy();
    die();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

body{
    font-family: sans-serif;
    background-image: url(../img/fondo.jpg);
    background-repeat: no-repeat;
     background-size: cover;
     background-position:center;
     background-attachment: fixed;
}
.bvn{
    top: 100px;
    width: 100%;
    padding: 10px 20px;  
    
    backdrop-filter: blur(10px);
    background-color:rgba(0, 128, 255, 0.5);
    color: whitesmoke;
     max-width: 500px;
    margin: auto;
    position: relative;

}
.bvn img  {

    
    margin: auto;
    position: relative;

    padding: 10px 20px;
}

.bvn button{
    padding: 10px 40px;
    border: 2px solid #fff;
    background: transparent;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
    transition : all 300ms;
    
}
.bvn button:hover{
    background-color: white;
    color: #46a2fd;
}

</style>


</head>
<body>
    <div class="bvn">
    <h1>Bienvenido</h1>
   
    <img  id="logo
    " src="../img/logo.png" alt="">

    <a href="./cerrar.php"><button>cerrar sesion</button></a>
    </div>
</body>
</html>