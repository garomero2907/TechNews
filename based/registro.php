<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);


    if ($stmt->execute()) {
      ?> 
      <h3 >¡Nuevo usuario creado con éxito, inicie sesión!</h3>
         <?php
    } else {
      ?> 
      <h3>¡Ups ha ocurrido un error!</h3>
         <?php
    }
  }   else {
      ?> 
      <h3>¡Por favor complete los campos!</h3>
          <?php
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechNews</title>
  <script>
      function comprobarClave(){
        password = document.f1.password.value
        confirm_password = document.f1.confirm_password.value
        if (password == confirm_password)
          execute();
        else
          alert("Las dos claves no coinciden, intente de nuevo")
          header("Location: /PaginaWebNoticias4_1");
          stop.execute();
        }
    </script>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="icon" href="img1/icon.svg">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="styles.css">

</head>

<body>

  <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>

  <div class="container">
    <!-- Navegación -->
    <nav class="nav-main">
      <!-- Encabezado -->
      <img src="img1/logo.png" height="80px" width="200px" alt="TechNews Logo" >
      <!-- Menú-->
      
      <ul class="nav-menu">
        <li >
          <FONT SIZE=5>
        <a href="actualidad.php">ACTUALIDAD</a>
          </FONT>
        </li>
        <li>
          <FONT SIZE=5> <a href="redessociales.php">REDES SOCIALES</a>
          </FONT>
        </li>
        <li>
          <FONT SIZE=5>
          <a href="tecnologia.php">TECNOLOGÍA</a>
          </FONT>
        </li>
        <li>
          <FONT SIZE=5>
          <a href="moviles.php">MÓVILES</a>
          </FONT>
        </li>
      </ul>
      

      
      <ul class="nav-menu-right">
        <li>
          <a href="#">
      
          </a>
        </li>
      </ul>
    </nav>
    <hr>  
    
    <a class="btn" href="../index.php">Volver a inicio</a>
    <a class="btn" href="login.php">Iniciar sesión</a>


    <div class="news-cards">

        <h3>Registro</h3>

        <?php if(!empty($message)): ?>
          <p> <?= $message ?></p>
          <?php endif; ?>  
        

          <form name="f1" action="registro.php" method="POST" id="formularioRegistro" autocomplete="off">
            <input name="email" type="email" placeholder="Ingresa un correo electrónico">
            <input name="password" type="password" placeholder="Ingresa una contraseña">
            <input name="confirm_password" type="password" placeholder="Confirmar contraseña">
            <p><input type="submit" value="Registrar" onClick="comprobarClave()"></p>
          </form>

    </div>
</p>

    
  <div class="footer-links">
    <div class="footer-container">
      <ul>
        <li>
          <a href="#">
            <FONT SIZE=4><h3 >SECCIONES</h3> </FONT>
          </a>
        </li>
        <li>
          <FONT SIZE=3><a href="#">Actualidad</a></FONT>    
        </li>
        <li>
          <FONT SIZE=3>  <a href="#">Redes sociales</a> </FONT>
        </li>
        <li>
          <FONT SIZE=3>  <a href="#">Tecnología</a> </FONT>
        </li>
        <li>
          <FONT SIZE=3>   <a href="#">Móviles</a> </FONT>
        </li>
      </ul>
      <ul>
        <li>
          <a href="#">
            <FONT SIZE=4> <h3>NOTAS MÁS IMPORTANTES</h3> </FONT>
          </a>
        </li>
        <li>
          <FONT SIZE=2>   <a href="#">+ WhatsApp vs Telegram: ¿cuál es la mejor aplicación de mensajería?</a> </FONT>
        </li>
        <li>
          <FONT SIZE=2>     <a href="#">+ Sale 5 sueldos, pero se agotó 3 horas: cuál es la obsesión argentina por la Play 5</a> </FONT>
        </li>
      
      </ul>
      <ul>
        <li>
          <a href="#">
            <FONT SIZE=4>    <h3>Información</h3> </FONT>
          </a>
        </li>
        <li>
          <FONT SIZE=3>  <a href="#">Contactanos</a> </FONT>
        </li>
        <li>
          <FONT SIZE=3>  <a href="#">Suscribete</a> </FONT>
        </li>
        <li>
          <FONT SIZE=3>  <a href="#">¿Quiénes somos?</a>  </FONT>
        </li>
        <li>
      </ul>
      <ul>
        <li>
          <a href="#">
            <section class="social">
              <p>Siguenos TechNews</p>
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
          </a>
        </li>
        </li>
      </ul>
    </div>
  </div>


  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <script src="main.js"></script>
  <script src="js/formulario1-jQuery.js"></script>
</body>

</html>
