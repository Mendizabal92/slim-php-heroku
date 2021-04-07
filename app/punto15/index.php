<?php
require_once "ClaseAbstracta.php";
require_once "Rectangulo.php";
require_once "Triangulo.php";

$miRectangulo= new Rectangulo(4,4);
$miRectangulo->set_color('blue');
//echo "<br>";
$miRectangulo->ToString();
echo "<br>";
$miRectangulo->Dibujar();

$miTriangulo= new Triangulo(8,4);
$miTriangulo->ToString();
$miTriangulo->set_color("rojo");
echo "<br>";
$miTriangulo->Dibujar();


?>