<?php 


class Rectangulo extends FiguraGeometrica
{

    private $_ladoUno;
    private $_ladoDos;

 function __construct($l1,$l2) {
        $this->_ladoUno=$l1;
        $this->_ladoDos=$l2;
        $this->CalcularDatos();
    }

    public function CalcularDatos()
    {
        $this->_superficie= $this->_ladoUno*$this->_ladoDos;
        $this->_perimetro= ($this->_ladoUno*2) + ($this->_ladoDos*2);
    }

    public function ToString()
    {
        echo "El perimetro es: $this->_perimetro<br>Superficie: $this->_superficie<br>El Primer lado mide: $this->_ladoUno<br>el Segundo mide: $this->_ladoDos<br>El color es: $this->_color";
    }

    public function Dibujar()
    {
        for ($i=0; $i < $this->_ladoDos; $i++) { 
            for ($j=0; $j < $this->_ladoUno; $j++) { 
                echo "*";
            }
            echo "<br>";
        }
    }



}









?>