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

    public function ToString()
    {
        echo "Perimetro: + $this->$_perimetro<br>Superficie: $this->_superficie<br>Color:$this->_color";
        /*echo "El perimetro es: $this->_perimetro</br>Superficie: $this->_superficie</br>El Primer lado mide:
         $this->ladoUno</br>el Segundo mide: $this->_ladoDos</br>El color es: $this->_color";*/
    }



}




?>