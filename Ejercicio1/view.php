<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes</title>
</head>
<body>
     <?php
     include "Zombie.php";
     include "Esqueleto.php";

     $personaje = new Esqueleto(); 
     $nuevoPersonaje = $personaje->CrearPersonaje();

     echo '<p>' . $nuevoPersonaje->getMensaje() . '</p>';
     echo '<p>Ataque: ' . $nuevoPersonaje->getAtaque() . '</p>';
     echo '<p>Velocidad: ' . $nuevoPersonaje->getVelocidad() . '</p>';
     ?>
</body>
</html>
