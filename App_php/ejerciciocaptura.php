<?php

  $errores='';
  $enviado = false;
  $nombre ='';
  $correo ='';
  $telefono ='';
  $mensaje ='';

  function filtrarCorreo($correo) {
    // Filtrar y validar el formato de correo electrónico
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
      return $correo;
    } else {
      return false;
    }
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
    //Para los errores
    if (!empty($_GET["nombre"])) {
      $nombre = $_GET["nombre"];
      $nombre = htmlspecialchars($nombre);
      //Cuando tengo datos, los muestro al final o en el mismo campo si se ha rellenado
    } else {
      $errores .= '<li class="errores">Por favor escribe un nombre</li>';
    }
    if (!empty($_GET["correo"])) {
      $correo = $_GET["correo"];
      $correo = filtrarCorreo($correo);
    } else {
      $errores .= '<li class="errores">Por favor escribe un correo</li>';
    }
    if (!empty($_GET["telefono"])) {
      $telefono = $_GET["telefono"];
      $telefono = htmlspecialchars($telefono);
    } else {
      $errores .= '<li class="errores">Por favor escribe un teléfono</li>';
    }
    if (!empty($_GET["mensaje"])) {
      $mensaje = $_GET["mensaje"];
      $mensaje = htmlspecialchars($mensaje);
    } else {
      $errores .= '<li class="errores">Por favor escribe un mensaje</li>';
    }
  } else {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    //Para los errores
    if (!empty($nombre)) {
      $nombre = htmlspecialchars($nombre);
      //Cuando tengo datos, los muestro al final o en el mismo campo si se ha rellenado
    } else {
      $errores .= '<li>Por favor escribe un nombre</li>';
    }
    if (!empty($correo)) {
      $correo = filtrarCorreo($correo);
    } else {
      $errores .= '<li>Por favor escribe un correo</li>';
    }
    if (!empty($telefono)) {
      $telefono = htmlspecialchars($telefono);
    } else {
      $errores .= '<li>Por favor escribe un teléfono</li>';
    }
    if (!empty($mensaje)) {
      $mensaje = htmlspecialchars($mensaje);
    } else {
      $errores .= '<li>Por favor escribe un mensaje</li>';
    }
  }

  require "formulario.php";

  echo "<h2>Resultado del formulario</h2>";
  if ($nombre && $correo && $telefono && $mensaje) {
      echo "<h3>Datos recibidos:</h3>";
      echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
      echo "<p><strong>Correo:</strong> " . $correo . "</p>";
      echo "<p><strong>Teléfono:</strong> " . $telefono . "</p>";
      echo "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";
      $enviado=true;
      if (isset($_GET['iniciarsesion'])) {
        echo 'Has iniciado sesión correctamente (por GET) <br>';
      }
      if (isset($_GET['registrar'])) {
        echo 'Te has registrado correctamente (por GET) <br>';
      }
      if (isset($_POST['iniciarsesion'])) {
        echo 'Has iniciado sesión correctamente (por POST) <br>';
      }
      if (isset($_POST['registrar'])) {
        echo 'Te has registrado correctamente (por POST) <br>';
      }
  } else {
      echo "<p>Faltan algunos campos por cumplimentar</p>";
  }
?>

<a href="formulario.php"><button>Rellenar un nuevo formulario</button></a>