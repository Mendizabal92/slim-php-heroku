<?php

class Triangulo extends FiguraGeometrica
{
    private $_base;
    private $_altura;

    public function __construct($b,$h) {
        $this->_base=$b;
        $this->_altura=$h;
        $this->CalcularDatos();
    }

    public function CalcularDatos()
    {
        $this->_perimetro = ($this->_altura*2) + $this->_base;
        $this->_superficie = ($this->_base*$this->_altura)/2;

    }

    public function ToString()
    {
        echo "Base: $this->_base <br>altura: $this->_altura <br> Perimetro: $this->_perimetro <br> Superficie: $this->_superficie <br> Color: $this->_color";
    }

    public function Dibujar()
    {
        for ($i=$this->_base; $i > 0; $i--) { 
            //echo str_repeat(" * ", $i + $j).'<br />';
            for ($j=$i; $j <= $this->_altura; $j++) { 
                echo "*";
            }
            echo "<br>";
        }
    }








}


?>