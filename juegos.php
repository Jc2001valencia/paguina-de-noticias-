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
    <title>Juegos Y consolas</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="./juegos.css">
  <link rel="icon" type="image/png" href="./img/brand1.png">
</head>
<body>
  <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>
    <div class="container">
        <nav class="nav-main">
            <img src="./img/brand1.png" alt="LOGO" class="nav-brand">
            <ul>
                 <!-- Left Nav -->
      <ul class="nav-menu">
           
                <li>
                    <a href="./php/home.php">Nuevas Tecnologias</a>
                </li>
                <li>
                    <a href="juegos.html">Video Juegos</a>
                </li>
                <li>
                    <a href="./perfil.php">Tecnología móvil</a>
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
                    <li><a href="./perfil.php">Perfil</a> </li>
                    
                    <li>  <a href="./php/cerrar.php">Cerrar sesion</a> </li>
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
            <h2> ¡ E3 2021: estos han sido los mejores anuncios hasta el momento! </h2>
      <p>Halo Infinite, Elden Ring y Guardians of the Galaxy, entre otros, son algunos de los títulos más destacados durante la E3 2021  </p>
            <a href="https://expansion.mx/tecnologia/2021/06/14/e3-2021-estos-han-sido-los-mejores-anuncios-hasta-el-momento" class="btn">
              SignUp <i class="fas fa-chevron-right"></i>
            </a>
          </header>

         


           <!-- Card Banner 1-->
    <section class="cards-banner-one">
        <div class="op">
      <div class="content">
        
        <h2>Los mejores videojuegos de 2021: los que ya puedes jugar y aquellos que están por llegar</h2>
        <!-- lorem 20 -->
        <p>El primer año de la nueva generación de consolas tendrá lanzamientos tan destacados como Halo Infinite, Ratchet & Clank o Deathloop!</p>
        <a href="https://www.vidaextra.com/listas/mejores-videojuegos-2021" class="btn">Learn More<i class="fas fa-chevron-right"></i></a>
    </div>
      </div>
    </section>

 <!--News Cards-->
 <div class="cards">
   
    <!--
    <div>
      <img src="./img/iphone12.jpg" alt="News 1">
      <h3>La familia 'iPhone 12' se sube al 5G y rescata los bordes cuadrados</h3>
      <p>Apple se ha citado en su web con millones de seguidores de la marca, para desvelar su nueva familia de iPhones 12, pero también para sorprender con criaturas como el HomePod Mini, el nuevo cuerpo del asistente Siri. Las miradas apuntaron al estreno oficial del 5G en todos sus dispositivos, ahora con bordes cuadrados rematados con acero inoxidable.</p>
      <a href="https://www.eleconomista.es/tecnologia/noticias/10824265/10/20/Sigue-en-directo-la-presentacion-de-la-nueva-familia-iPhone-12.html">Learn More <i class="fas fa-angle-double-right"></i></a>
    </div>
-->
    <!---------------------->
    <div>
      <img src="./img/XboxSeriesXandS_HERO.jpg" alt="News 2">
      <h3>XBOX series X</h3>
      <p>consola inicial de la octava generación de consolas de videojuegos, la cual fue lanzada a finales de Noviembre de 2020 y trae consigo un espectacular hardware que la convierten en la consola más potente hasta su fecha de lanzamiento.</p>
      <a href="https://www.xbox.com/es-CO">Learn More <i class="fas fa-angle-double-right"></i></a>
    </div>

    <!---------------------->
    <div>
      <img src="./img/playstation-5-playstation-4-ps5-ps4-1966495.webp" alt="News 3">
      <h3>PlayStation 5</h3>
      <p> consola de videojuegos de sobremesa desarrollada por la empresa Sony Interactive Entertainment. Fue anunciada en el año 2019 como la sucesora de la PlayStation 4, la PS5 se lanzó el 12 de noviembre de 2020 en Australia, Japón, Nueva Zelanda, América del Norte, Singapur y Corea del Sur. Lanzado en todo el mundo seguido una semana después. La PlayStation 5 junto con las consolas Xbox Series X y Series S de Microsoft, lanzadas el mismo mes, son parte de la novena generación de consolas de videojuegos.</p>
      <a href="https://www.playstation.com/es-co/">Learn More <i class="fas fa-angle-double-right"></i></a>
    </div>

    <!---------------------->
    <div>
      <img src="./img/1366_2000.jpeg" alt="News 4">
      <h3>Nintendo Switch</h3>
      <p>es la novena consola de videojuegos principal desarrollada por Nintendo. Conocida en el desarrollo por su nombre código «NX», se dio a conocer en octubre de 2016 y fue lanzada mundialmente el 3 de marzo de 2017.

        Nintendo considera a Switch una consola híbrida. Se puede utilizar como consola de sobremesa con la unidad principal insertada en una estación de acoplamiento para conectarla con un televisor. Alternativamente, puede ser extraída de la base y utilizada de forma similar a una tableta.</p>
      <a href="https://www.nintendo.com/es_LA/switch/system/">Learn More <i class="fas fa-angle-double-right"></i></a>
    </div>



  </div>

     <!--News Cards 2-->
     <div class="news-cards">
         
      <div>
        <img src="./img/rtx.png" alt="News 1">
        <h3>GEFORCE RTX 3090</h3>
        <p>La GeForce RTX™ 3090 es increíblemente potente en todas las formas, por lo que te brinda un nivel de rendimiento completamente nuevo. Está impulsada por Ampere, la arquitectura de segunda generación de NVIDIA RTX, que duplica el rendimiento de IA y de ray tracing gracias a los Núcleos RT y Núcleos Tensor mejorados y los nuevos multiprocesadores de transmisión. Además, cuenta con 24 GB de memoria G6X para brindar la experiencia de juego definitiva.</p>
        <a href="https://www.nvidia.com/es-la/geforce/graphics-cards/30-series/rtx-3090/">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>

      <!---------------------->
      <div>
        <img src="./img/Consola-vs-PC.jpg" alt="News 2">
        <h3>PC vs consolas: ¿cuál es mejor para jugar a videojuegos?</h3>
        <p>Los videojuegos se han convertido en uno de los medios de entretenimiento más populares en todo el mundo, superando en recaudación a otras industrias como es el caso del cine. Son muchas las plataformas en las que podemos jugarlos, pero normalmente el debate a la hora de comprar una consola suele reducirse a si es mejor comprarse un ordenador o una consola. Por ello, vamos a ayudarte a decidirte entre un PC o consola..</p>
        <a href="https://www.adslzone.net/reportajes/videojuegos/pc-vs-consolas/">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>

      <!---------------------->
      <div>
        <img src="./img/ddtecgx_crop1599258835468.jpeg_430732068.jpeg" alt="News 3">
        <h3>Mejores configuraciones PC Gamer por piezas</h3>
        <p>En este artículo hemos querido recopilar todas las configuraciones de torres gaming que hemos ido sacando durante este tiempo con el fin de poder compararlas con más facilidad. Por supuesto, hay componentes que se pueden modificar y ampliar, por lo que en algunas de ellas hemos dejado cuáles serían las posibles actualizaciones recomendadas..</p>
        <a href="https://www.guiahardware.es/mejores-configuraciones-pc-gamer/">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>

      <!---------------------->
      <div>
        <img src="./img/asus.png" alt="News 4">
        <h3>ASUS presentó en Colombia el nuevo ZenBook Pro Duo, el portátil con 2 pantallas</h3>
        <p>El ZenBook Pro Duo, ofrece infinitas posibilidades para los creadores de contenido y facilita la multitarea, lo que permite flujos de trabajo que aumentan la productividad. Esta pantalla secundaria se integra a la perfección con la principal, y el software ScreenXpert que incluye una amplia selección de aplicaciones, herramientas y utilidades que permiten a los usuarios disfrutar fácilmente de los beneficios de eficiencia de ScreenPad Pluso.</p>
        <a href="http://www.tecnogus.com.co/2019/10/asus-presento-en-colombia-el-nuevo.html">Learn More <i class="fas fa-angle-double-right"></i></a>
      </div>



    </div>

     <!-- third card -->
     <section class="cards-banner-two">
      <div class="content">
        <h2>Los mejores juegos para Android de 2021... hasta ahora.</h2>
        <!-- lorem 30 -->
        <p>Vamos pues a recopilar los mejores juegos en lo que llevamos de año, aquellas propuestas que han sido lanzadas recientemente y que han logrado hacer bastante ruido a pesar de 2021 aún no está muy avanzado!</p>
        <a href="https://www.xatakandroid.com/listas/mejores-juegos-para-android-2020" class="btn">Learn More <i class="fas fa-chevron-right"></i></a>
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