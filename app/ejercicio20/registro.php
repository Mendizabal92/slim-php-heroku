<?php
include "usuario.php";

$miUsuario = new Usuario();
$miUsuario->nombre=$_POST["nombre"];
$miUsuario->clave=$_POST["clave"];
$miUsuario->mail=$_POST["mail"];
//Usuario::Alta($miUsuario);
//var_dump($miUsuario);

if (!Usuario::ValidarUsuario($miUsuario)) {
    echo "no se guardo";
}
else{
    var_dump($miUsuario);
    Usuario::Alta($miUsuario);
    echo "se guardo correctamente";
}


?>