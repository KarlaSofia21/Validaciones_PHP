<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $contrasena = isset($_POST['contrasena']) ? trim($_POST['contrasena']) : '';
    $edad = isset($_POST['edad']) ? intval($_POST['edad']) : 0;


    if ($nombre === 'Luis' && $contrasena === 'Mendoza' && $edad >= 18) {
        echo "Bienvenido, " . $nombre;
    } else {
        echo "Acceso denegado. Verifica tu usuario y contraseña.";
    }
}
?>