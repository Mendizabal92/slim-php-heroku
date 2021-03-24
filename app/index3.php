<?php

/*$Nombre="julian";

echo "hello word!";
//echo "\n";espacio
echo "<br>";
echo $Nombre;
echo "<br>";
echo "Hola ".$Nombre;
echo "<br>";
echo var_dump($Nombre);//muestra el tipo de dato y la cantidad
$entero=1;
$suma=0;
while($suma<1000)
{
    echo "<br>";
    $suma=$suma+$entero;
    $entero++;
    echo $suma;
}
 echo "<br>";
echo "cantidad de numeros sumados ".$entero;
/*ejercicio 2 */
echo "<br>";
echo "<br>";
$d=date("m");
echo $d;
echo "<br>";
echo date("d/m/Y");
echo "<br>";
if($d>=3 && $d<=6)
{
echo "Es Otoño";
}elseif($d>=7 && $d<=9)
{
    echo "Invierno";
}elseif($d>=10 && $d<=12)
{
    echo "Primavera";
}else
{
    echo "Verano";
}


echo "<br>";
echo "<br>";
/*Ejercicio 3*/
$a=6;
$b=7;
$c=2;

if($a<$b && $a>$c || $a>$b && $a<$c)
{
 echo "El valor A es el valor del medio ".$a;
}
elseif($b<$a && $b>$c || $b>$a && $b<$c)
{
    echo "El valor B es el valor del medio ".$b;
}
elseif($c<$a && $c>$b || $c>$a && $c<$b)
{
     echo "El valor C es el valor del medio ".$c;
}
else
{
    echo "no hay valor del medio";

}

//Mendizabal Julian

/*Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.*/
/*******************************************************************************/
/*$operador="/";
$op1=rand(0,10);
$op2=rand(0,10);
//$op1=2;
//$op2=0;
var_dump($op1);
var_dump($op2);
$resultado=0;
switch ($operador) {
    case '+':
        $resultado = $op1 + $op2; 
        break;
    case '-':
       $resultado = $op1 - $op2; 
        break;
    case '*':
       $resultado = $op1 * $op2; 
        break;
    case '/':
        if ($op2 == 0) {
        echo "No se puede dividir por 0, bruto!";
        break;
        }
         $resultado = $op1 / $op2;
}
echo $resultado;
?>
echo "</br>";
echo "</br>";*/
/*Ejercicio 5 */
/*$num=rand(20,60);
function MostrarUnidad($unidad)
{
    switch ($unidad) 
    {
    case 1:
        echo 'uno';
        break;
    case 2:
        echo 'dos';
        break;
    case 3:
        echo 'tres';
        break;
    case 4:
        echo 'cuatro';
        break;
    case 5:
        echo 'cinco';
        break;
    case 6:
        echo 'seis';
        break;
    case 7:
        echo 'siete';
        break;
    case 8:
        echo 'ocho';
        break;
    case 9:
       echo 'nueve';
        break;           
    
   
    }
}
 
 switch ($num) {
     case $num == 20:

      echo 'veinte';
         break;
     case $num < 30:

        echo 'veinti';
        MostrarUnidad($num % 10);
         break;

     case $num == 30:

         echo 'treinta';
         break;
     case $num == 40:

     echo 'cuarenta';
         break;
     case $num < 40:

         echo 'treinta y ';
         MostrarUnidad($num % 10);
         break;
     case $num == 50:

            echo 'cincuenta';
         break;
     case $num < 50:
         
         echo 'cuarenta y ';
         MostrarUnidad($num % 10);
         break;
     case $num < 60:
         
         echo 'cincuenta y ';
         MostrarUnidad($num % 10);
         break;    
     case $num == 60:
         
         echo 'sesenta';
         break;
     
 }

*/
/*Ejercicio 6*/
echo "</br>";
$Array=array();




for ($i=0; $i < 5; $i++) { 

$Array[$i]=rand(0,10);
$promedio= array_sum($Array)/count($Array);


}
echo "</br>";
var_dump($Array);
echo "</br>";
if($promedio<6)
{
    echo "El promedio es menor a 6: ".$promedio;
}elseif ($promedio>6) {
    echo"El promedio es mayor a 6: ".$promedio;
}else {
    echo"El promedio es 6: ".$promedio;
}
echo "</br>";
echo "</br>";
/*Ejercicio 7*/
$aray=array();

/*for ($i = 0, $numero = 1; $i < 10; $numero++) { 
	if($numero % 2 == 0) continue;
	$aray[] = $numero;
	$i++;
}*/
//$i=0;
    while ($i < count($aray)) {
        echo "$aray[$i]</br>";
        $i++;
    }
for ($i = 0; $i < count($aray); $i++)
	echo "$aray[$i]<br>";
echo "</br>";
/*con while*/

echo "</br>";

/*foreach ($aray as $value) {
    echo "$value</br>";
}*/
echo "</br>";
/*Ejercicio 8*/

$v=array("1"=>"90","30"=>"7",'e'=>"99",'hola'=>"mundo");
foreach ($v as $value) {
    echo $value;
    echo "</br>";
}
echo "</br>";
/*Ejercicio 9*/
$lapicera1=array("color"=>"rojo","marca"=>"Bic","trazo"=>0.5,"precio"=>1);
$lapicera2=array("color"=>"azul","marca"=>"fabercastell","trazo"=>0.4,"precio"=>2);
$lapicera3=array("color"=>"verde","marca"=>"pelikan","trazo"=>0.2,"precio"=>7);
echo "</br>";
foreach ($lapicera1 as $value) {
    echo $value."</br>";
}
var_dump($lapicera1);
echo "</br>";

foreach ($lapicera2 as $value) {
    echo $value."</br>";
}
var_dump($lapicera2);
echo "</br>";

foreach ($lapicera3 as $value) {
    echo $value."</br>";
}
var_dump($lapicera3);
echo "</br>";
echo "</br>";
/*Ejercicio 10*/
$lapicera1=array("color"=>"rojo","marca"=>"Bic","trazo"=>0.5,"precio"=>1);
$lapicera2=array("color"=>"azul","marca"=>"fabercastell","trazo"=>0.4,"precio"=>2);
$lapicera3=array("color"=>"verde","marca"=>"pelikan","trazo"=>0.2,"precio"=>7);
$arrayIndex=array($lapicera1,$lapicera2,$lapicera3);

foreach ($arrayIndex as $value) {
    echo $value["color"]."</br>";
    echo $value["marca"]."</br>";
    echo $value["trazo"]."</br>";
    echo $value["precio"]."</br>";
}
var_dump($arrayIndex);
 ?>