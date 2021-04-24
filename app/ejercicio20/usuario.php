<?php

class Usuario
{
    public $nombre;
    public $clave;
    public $mail;

    public function __construct($nombre=null,$clave=null,$mail=null)
    {
        if($nombre !=null && $clave!=null && $mail!=null)
        {
            $this->nombre=$nombre;
            $this->clave=$clave;
            $this->mail=$mail;
        }

    }

    public function ToString()
    {
        return $this->nombre."\n".$this->clave."\n".$this->mail."\n";
    }


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
			$archivo=fopen("./usuarios.csv", "a");
			//$renglon=$user->nombre."\n".$user->clave."\n".$user->mail."\n";
			$cant=fwrite($archivo,$user->ToString());
			
			if ($cant > 0) 
			{
				$resultado= TRUE;			 	
			 }
             fclose($archivo); 				 
             //var_dump($cant);
			 return $resultado;
             
        }




    /*public static function validaMail($str)
    {
    return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
    }*/




    
}




?>
