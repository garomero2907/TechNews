<?php
if(!isset($_SESSION)){
	session_start();
}
  require 'based/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechNews</title>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="icon" href="img/icon.svg">

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
      <img src="img/logo.png" height="80px" width="200px" alt="TechNews Logo" >
      <!-- Menú-->
      
      <ul class="nav-menu">
        <li>
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
      
      <div>
      <?php if(!empty($user)): ?>
            <br><center style="color: #2E2EFE; font-family: 'Playfair Display', serif; font-size: 25px;">Bienvenido</center>
            <?= $user['email']; ?></br>
            <center><a class="btn" href="based/logout.php" name="boton" >Cerrar sesión</a></center>
 

            <?php else: ?>
            <center><p><a class="btn" href="based/login.php" name="boton">Iniciar sesión</a></p></center>
            <center><a class="btn" href="based/registro.php" name="boton">Registrarse</a></center>
            <?php endif; ?>
      </div>
      
      <ul class="nav-menu-right">
        <li>
          <a href="#">
      
          </a>
        </li>
      </ul>
    </nav>
    <hr>