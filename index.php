<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/png" href="./img/brand1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="bg-img">
    <a href="./php/administrador/administrador.php" style="color: black;"><span class="fa fa-cog" ></span> administrador</a>
        <div class="content">
            <header>login From</header>
            <form  action="php/login.php" method="POST">
                <div class="field ">
                    <span class="fa fa-user"> </span>
                    <input type="text"  name="email_username" placeholder="Email or Phone" required  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password"  name="password" class="password" required placeholder="password">
                    <span class="show" ><i class="fa fa-eye-slash"></i></span>
                </div>
                <div class="pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <a href="home.html" style=" text-decoration: none;
                "><div class="field ">
                    
                    <input type="submit" name="login" value="LOGIN">
                 </div></a>
                
                <div class="login">Or login with </div>
                <div class="link">
                    <div class="facebook"> 
                        <i class="fa fa-facebook-f"><span>Facebook</span></i>
                       
                    </div>
                    <div class="google"> 
                        <i class="fa fa-google"><span>Google</span></i> 
                    </div>
                </div>
                <div class="signup">Don't have account?
                    <a href="#openModal">Signup Now</a>
                </div>
            </form>
        </div>



<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		 <form action="php/registro.php" method="POST" class="form_register">
    <h2>create Account</h2>
    <br>
    <div class="field ">
                    <span class="fa fa-user"> </span>
                    <input type="text"  name="nombre" placeholder="Nombre" required  >
                </div>

                <div class="field space">
                    <span class="fa fa-user"> </span>
                    <input type="text"  name="apellido" placeholder="Apellidos" required >
                </div>

                <div class="field space">
                    <span class="fa fa-phone"></span>
                    <input type="text"  name="telefono" placeholder="Telefono" required  >
                </div>

                <div class="field space">
                    <span class="fa fa-at"></span>
                    <input type="text"  name="email" placeholder="Email" required  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
                </div>

                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password"  name="password" class="password" required placeholder="password">
                    <span class="show" ><i class="fa fa-eye-slash"></i></span>
                </div>
                <div class="pass">
                   
                </div>
                <a href="home.html" style=" text-decoration: none;
                "><div class="field ">
                    
                    <input type="submit" name="create" value= "Create">
                 </div></a>
</form>
	</div>
</div>



    </div>
    <script>
        const pass_field = document.querySelector('.password');
        const show_btn = document.querySelector('.show');
        show_btn.addEventListener('click',function(){
      if(pass_field.type === "password"){
          pass_field.type = "text";
          show_btn.style.color = "#3498db"
      }else{
        pass_field.type ="password";
        show_btn.style.color = "#222";
      }
        });
    </script>
</body>
</html>