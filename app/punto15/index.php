<?php  


abstract class FiguraGeometrica
{

    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    function get_color(){
       return $this->_color;
    }

    function set_color($col){
        $this->_color=$col;
    }

    abstract public function Dibujar();
    abstract protected function CalcularDatos();




}




?>