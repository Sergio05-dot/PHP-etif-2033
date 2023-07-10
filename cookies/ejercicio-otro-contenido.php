<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
<style>
        <?php

        //Mantenemos valores estilos con las cookies
        echo "p { color: ". $_COOKIE['coloParrafo'].";" . "font-size: ". $_COOKIE['tamanioLetra']. "; }";
        echo "body { background-color: ". $_COOKIE['colorFondo']."; }";
        echo "h1 { font-size: ". $_COOKIE['tamanyTitol']."; }";
        ?>
    </style>
    <title>Otro contenido</title>
</head>
<body>
    <h1>Otro contenido</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus iste doloremque laudantium perspiciatis iusto assumenda sit, alias quo vero accusamus nesciunt fuga quibusdam rem mollitia magni architecto sunt eos excepturi!</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus iste doloremque laudantium perspiciatis iusto assumenda sit, alias quo vero accusamus nesciunt fuga quibusdam rem mollitia magni architecto sunt eos excepturi!</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus iste doloremque laudantium perspiciatis iusto assumenda sit, alias quo vero accusamus nesciunt fuga quibusdam rem mollitia magni architecto sunt eos excepturi!</p>
    
    <a href="ejercicio-contenido-cookie.php">Volver al contenido</a>

</body>
</html>