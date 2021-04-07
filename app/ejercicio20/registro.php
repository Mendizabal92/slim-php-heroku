<?php
include "usuario.php";

$miUsuario = new Usuario();
$miUsuario->nombre=$_POST["nombre"];
$miUsuario->clave=$_POST["clave"];
$miUsuario->mail=$_POST["mail"];
//Usuario::Alta($miUsuario);
//var_dump($miUsuario);

if (Usuario::ValidarUsuario($miUsuario) == "OK") {
    var_dump($miUsuario);
    Usuario::Alta($miUsuario);
}
else{
    echo "no se guardo";
}


?>