<?php

//Para redireccionar de vista.php a ejercicio-captura.php
// if(!$_GET) {
//   header('Location: http://localhost/php-etif-2023/12-app-formulario/ejercicios/ejercicio-captura.php');
// }
// if(!$_POST) {
//   header('Location: http://localhost/php-etif-2023/12-app-formulario/ejercicios/ejercicio-captura.php');
// }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Contacto</title>
  <link rel="stylesheet" href="../App_php/formulario.css">
</head>
<body>
  <h1>Formulario de Contacto</h1>
  
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">

    <!-- Equivalente a la sintaxis clásica -->
    <!-- <?php 
      // if(!$enviado && isset($nombre)) {
      //   echo $nombre;
      // }  
    ?> -->
    
    <br>
    
    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
    
    <br>
    
    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" value="<?php if(!$enviado && isset($telefono)) echo $telefono ?>">
    
    <br>
    
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
    
    <br>
    
    <label for="terminos"><input type="checkbox" id="terminos" name="terminos" required> Acepto los términos y condiciones</label>

    <ul>
        <?php 
          if (!empty($errores)) {
            echo $errores;
          }
        ?>
    </ul>
    
    <input type="submit" name="iniciarsesion" value="Iniciar Sesión">
    <input type="submit" name="registrar" value="Registrar">
    <br>
    <br>
  </form>
</body>
</html>