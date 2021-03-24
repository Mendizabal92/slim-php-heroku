<?php 

$nombre1= "julian";
$nombre= 100;

echo "$nombre".strtoupper($nombre1);
echo"</br>";
printf("$nombre");

$array=array(1,2,3);
echo"</br>";
echo"</br>";
print_r($array);
echo"</br>";
echo"</br>";
foreach ($array as $key => $value) {
   echo "$key => $value "; 
}
//-----------EJERCICIO 1---------//
echo"</br>";
echo"</br>";
$numero=1;
$contador=0;
for ($i=0; $i < 1000; $i++) { 
    $numero=$numero+$i;
    if($numero<1000){
        echo"</br>";   
        echo $numero; 
        $contador=$i;
      }    
}
echo"</br>";
echo "la cantidad de numeros es ".$contador;


//-----------EJEERCICIO 2-------//
echo"</br>";
echo"</br>";
echo"</br>";
echo date("m/d/yy");
echo"</br>";
echo date("d-m-yy");
$dia=date("d");
$mes=date("m");
if(($dia >=1 || $dia<=20) && ($mes>=3 && $mes<=6)){

echo "es otoño";
}elseif(($dia >=1 || $dia<=20) && ($mes>=6 && $mes<=9)) {
    echo "es invierno";
}elseif(($dia >=1 || $dia<=20) && ($mes>=9 && $mes<=12)) {
    echo "es primavera";
}else{
    echo "es verano";
}


echo date("d/m/yy");
$mes = date("m");
$dia= date("d");
switch($mes){
    case ($mes = 3 && $dia >= 20) && ($mes <= 6 && $dia <=20):
        echo "<\br>";
        echo "otoño";
        break; //salimos del switch y no se evaluan las otras condiciones
    case ($mes = 6 && $dia >= 20) && ($mes <= 9 && $dia <=20):
        echo "<\br>";
        echo "invierno";
        break;
    case ($mes = 9 && $dia >= 20) && ($mes <= 12 && $dia <=20):
        echo "<\br>";
        echo "primavera";
        break;
    default:
        echo "<\br>";
        echo "verano";
        break;
}



//ver esto porque a mario le salio. no recuerdo que hizo en el parametro de apellido
function saludar($nombre,$apellido='')
{
    echo ("hola $nombre$apellido");
}
saludar('pepe');
saludar('pepe','luis');

?>