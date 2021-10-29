<?php

session_start();
$nombre = $_SESSION['usuario'];
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecNews</title>
     <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="../home.css">
  <link rel="icon" type="../img/png" href="../img/brand1.png">

  
</head>
<body>
  <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>
    <div class="container">
        <nav class="nav-main">
            <img src="../img/brand1.png" alt="LOGO" class="nav-brand">
            <ul>
                 <!-- Left Nav -->
                 <!-- comentario nuevi -->
      <ul class="nav-menu">
                <li>
                    <a href="../php/home.php">Nuevas Tecnologias</a>
                </li>
                <li>
                    <a href="../juegos.php">Video Juegos</a>
                </li>
                <li>
                    <a href="#">Tecnología móvil</a>
                </li>
                <li>
                    <a href="#">Tecnología informática</a>
                </li>
                <li>
                    <a href="#">Tecnología en el hogar</a>
                </li>
               
                <li class="abrir">
                    <a href="#"><span class="fa fa-user"></span> <?php echo($nombre) ?> </a>
                  <ul>
                    <li><a href="../perfil.php">Perfil</a> </li>
                    
                    <li>  <a href="./cerrar.php">Cerrar sesion</a> </li>
                  </ul>

                </li>
                
            </ul>
            <!-- Right Nav -->
      <ul class="nav-menu-right">
        <li>
          <a href="#">
            <i class="fas fa-search"></i>
          </a>
        </li>
      </ul>
        </nav>
        <hr>


        <!--Showcase-->
        <header class="showcase">
            <h2> ¡ Grandes noticias hoy! </h2>
      <p> Una de las principales tecnologías usadas por las empresas en este tiempo de pandemia es la inteligencia artificial (IA) en forma de robots para tareas usualmente realizadas por humanos, como los servicios de atención al cliente mediante asistentes virtuales </p>
            <a href="#" class="btn">
              SignUp <i class="fas fa-chevron-right"></i>
            </a>
          </header>

          <!--News Cards-->
          <div class="news-cards">
         
            <div>
              <img src="../img/iphone12.jpg" alt="News 1">
              <h3>La familia 'iPhone 12' se sube al 5G y rescata los bordes cuadrados</h3>
              <p>Apple se ha citado en su web con millones de seguidores de la marca, para desvelar su nueva familia de iPhones 12, pero también para sorprender con criaturas como el HomePod Mini, el nuevo cuerpo del asistente Siri. Las miradas apuntaron al estreno oficial del 5G en todos sus dispositivos, ahora con bordes cuadrados rematados con acero inoxidable.</p>
              <a href="https://www.eleconomista.es/tecnologia/noticias/10824265/10/20/Sigue-en-directo-la-presentacion-de-la-nueva-familia-iPhone-12.html">Learn More <i class="fas fa-angle-double-right"></i></a>
            </div>

            <!---------------------->
            <div>
              <img src="../img/whatsapp-logo-3.jpg" alt="News 2">
              <h3>¿En qué móviles dejará de funcionar Whatsapp a partir de 2021?</h3>
              <p>Como toda aplicación móvil, una de las características de Whatsapp es su progresiva actualización, en la que va modificando y ampliando las funciones de su red de mensajería. Esto provoca que, a medida que aumenten las especificaciones de la aplicación, algunos teléfonos (los de mayor edad) queden obsoletos y sean incompatibles.</p>
              <a href="https://www.eleconomista.es/tecnologia/noticias/10825028/10/20/En-que-moviles-dejara-de-funcionar-Whatsapp-a-partir-de-2021.html">Learn More <i class="fas fa-angle-double-right"></i></a>
            </div>

            <!---------------------->
            <div>
              <img src="../img/1366_2000.jpg" alt="News 3">
              <h3>Xiaomi Mi 11 Ultra</h3>
              <p>Uno de los Mi 11 saca pecho con diferencia, o mejor dicho, espalda. En el análisis del Xiaomi Mi 11 Ultra hemos estado probando a la joya de la corona de este año de Xiaomi.</p>
              <a href="https://www.xataka.com/analisis/xiaomi-mi-11-ultra-analisis-caracteristicas-precio-especificaciones">Learn More <i class="fas fa-angle-double-right"></i></a>
            </div>

            <!---------------------->
            <div>
              <img src="../img/Nuevas-Tecnologias-en-el-Hogar.png" alt="News 4">
              <h3>Las nuevas tecnologías en el hogar</h3>
              <p>En esta nueva era que ha traído consigo varios años de avances tecnológicos, es importante rescatar algunas de las cosas más novedosas que han salido al mercado, las tendencias actuales y las novedades que estarán disponibles a lo largo de todo este año.</p>
              <a href="https://cronicaglobal.elespanol.com/global-content/nuevas-tecnologias-hogar_130589_102.html">Learn More <i class="fas fa-angle-double-right"></i></a>
            </div>



          </div>


           <!-- Card Banner 1-->
    <section class="cards-banner-one">
      <div class="content">
        <h2>Consolas y Videojuegos</h2>
        <!-- lorem 20 -->
        <p>Si lo tuyo son los video juegos aquí puedes encontrar todo hacer ca del mundo del Gaming !</p>
        <a href="juegos.html" class="btn">Learn More<i class="fas fa-chevron-right"></i></a>
      </div>
    </section>

     <!--News Cards 2-->
     <div class="news-cards">
         
      <div>
        <img src="../img/5g.jpg" alt="News 1">
        <h3>Qué es el 5G y cómo nos cambiará la vida</h3>
        <p>El 5G está en boca de todos. Esta nueva tecnología móvil aumentará la velocidad de conexión, reducirá al mínimo la latencia (el tiempo de respuesta de la web) y multiplicará exponencialmente el número de dispositivos conectados. En otras palabras: estaremos conectados a todo, todo el día, y en el menor tiempo posible. Pero, ¿es peligroso?.</p>
        <a href="https://www.nationalgeographic.com.es/ciencia/que-es-5g-y-como-nos-cambiara-vida_14449">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>

      <!---------------------->
      <div>
        <img src="../img/nuevag.jpg" alt="News 2">
        <h3>La nueva generación de consolas</h3>
        <p>La nueva generación de los videojuegos está aquí, y a tiempo para la temporada navideña. Microsoft y Sony se vuelven a ver las caras en el enfrentamiento clásico de cada generación de consolas.</p>
        <a href="https://www.xataka.com/videojuegos/nueva-generacion-consolas-juego-pros-contras-ps5-xbox-series-x-s-despeja-x-116">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>

      <!---------------------->
      <div>
        <img src="../img/harmony.jpg" alt="News 3">
        <h3>HarmonyOS</h3>
        <p>HarmonyOS es un sistema operativo desarrollado por Huawei.</p>
        <a href="https://www.xatakandroid.com/sistema-operativo/alternativa-huawei-al-android-google-harmonyos-se-lanzara-oficialmente-2-junio">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>

      <!---------------------->
      <div>
        <img src="../img/asus.png" alt="News 4">
        <h3>ASUS presentó en Colombia el nuevo ZenBook Pro Duo, el portátil con 2 pantallas</h3>
        <p>El ZenBook Pro Duo, ofrece infinitas posibilidades para los creadores de contenido y facilita la multitarea, lo que permite flujos de trabajo que aumentan la productividad. Esta pantalla secundaria se integra a la perfección con la principal, y el software ScreenXpert que incluye una amplia selección de aplicaciones, herramientas y utilidades que permiten a los usuarios disfrutar fácilmente de los beneficios de eficiencia de ScreenPad Pluso.</p>
        <a href="http://www.tecnogus.com.co/2019/10/asus-presento-en-colombia-el-nuevo.html">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>



    </div>

     <!-- third card -->
     <section class="cards-banner-two">
      <div class="content">
        <h2>Dispositivos móviles.</h2>
        <!-- lorem 30 -->
        <p>Sigue toda la actualidad sobre los dispositivos móviles en nuestro portal especializado!</p>
        <a href="#" class="btn">Learn More <i class="fas fa-chevron-right"></i></a>
      </div>
    </section>

    
    <!-- Follow -->
    <section class="social">
      <p>TechNews</p>
      <div class="links">
        <a href="https://facebook.com">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://linkdin.com">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
    </section>
  </div>

   <!-- Footer Links -->
   <div class="footer-links">
    <div class="footer-container">
      <ul>
        <li>
          <a href="#">
            <h3>Tecnología informática</h3>
          </a>
        </li>
        <li>
          <a href="#">Blockchain</a>
        </li>
        <li>
          <a href="#">Machine Learning</a>
        </li>
        <li>
          <a href="#">Artificial Intelligence</a>
        </li>
        <li>
          <a href="#">Quantum Computing</a>
        </li>
        <li>
          <a href="#">Startup</a>
        </li>
        <li>
          <a href="#">Cryptocurrencies</a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="#">
            <h3>Tecnología en el hogar</h3>
          </a>
        </li>
        <li>
          <a href="#">Blockchain</a>
        </li>
        <li>
          <a href="#">Machine Learning</a>
        </li>
        <li>
          <a href="#">Artificial Intelligence</a>
        </li>
        <li>
          <a href="#">Quantum Computing</a>
        </li>
        <li>
          <a href="#">Startup</a>
        </li>
        <li>
          <a href="#">Cryptocurrencies</a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="#">
            <h3>Tecnología en el hogar</h3>
          </a>
        </li>
        <li>
          <a href="#">Blockchain</a>
        </li>
        <li>
          <a href="#">Machine Learning</a>
        </li>
        <li>
          <a href="#">Artificial Intelligence</a>
        </li>
        <li>
          <a href="#">Quantum Computing</a>
        </li>
        <li>
          <a href="#">Startup</a>
        </li>
        <li>
          <a href="#">Cryptocurrencies</a>
        </li>
      </ul>

      <div class="login-box">

<form action=""></form>
<h2>dejanos tu mensaje y nos comunicaremos con tigo</h2>
<input style=" width: 80%;
  margin-bottom: 20px;
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;" 
  type="text"  name="nombre" placeholder="Nombre y apellidos" >

<input style=" width: 80%;
  margin-bottom: 20px;
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;"
   type="text"  name="phone" placeholder=" Phone" >
<input style=" width: 80%;
  margin-bottom: 20px;
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;"
   type="text"  name="email" placeholder="email" >
<input style=" width: 80%;
  margin-bottom: 20px;
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;"
   type="text"  name="mensaje" placeholder="mensaje" >
<br>
<input style=" border: none;
  width: 80%;
  outline: none;
  height: 40px;
  background: #b80f22;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;"
   type="submit" name="create" value= "Enviar">


      </div>
     
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <h3>Developer: Juan Camilo Valencia Mosquera</h3>
  </footer>

  
    </div>
    
     <!-- Scroll Reveal -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
</body>

</html>