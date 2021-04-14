<?php

class Usuario
{
    public $nombre;
    public $clave;
    public $mail;

   static function ValidarUsuario(Usuario $unUsuario)
    {
        $estado=null;
        if(isset($unUsuario->nombre) && isset($unUsuario->clave) && isset($unUsuario->mail)) {

            if ($unUsuario->nombre=="admin" && $unUsuario->clave=="1234" && $unUsuario->mail=="julian@mail.com") {
                    $estado = "OK";
                   
                }else{
                    $estado = "user no registrado";
                    
                }
        }else {
            $estado = "faltan datos";
                    
        }
        //var_dump($estado);
        return $estado;
    }

        public static function Alta($user)
        {
            $resultado= FALSE;
			$archivo=fopen("usuarios.csv", "a");
			$renglon=$user->nombre."\n".$user->clave."\n".$user->mail."\n";
			$cant=fwrite($archivo,$renglon);
			
			if ($cant > 0) 
			{
				$resultado= TRUE;			 	
			 }
             fclose($archivo); 				 
             //var_dump($cant);
			// return $resultado;
             
        }




    /*public static function validaMail($str)
    {
    return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
    }*/




    
}




?>
