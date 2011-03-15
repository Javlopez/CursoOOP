<?php
/**
 * Description of alumno
 *
 * @author ajaxman
 */
class Alumno extends Persona {

    private $_parcial1 = 0;
    private $_parcial2 = 0;
    private $_parcial3 = 0;
    private $_promedio = 0;
    private $_clases = '';   

    public function  __construct($datos = array())
    {
      parent::__construct($datos);

    }


    public function setParcial1($calificacion = 0)
    {
        $this->_parcial1 = $calificacion;
    }

    public function setParcial2($calificacion = 0)
    {
        $this->_parcial2 = $calificacion;
    }

    public function setParcial3($calificacion = 0)
    {
        $this->_parcial3 = $calificacion;
    }
    
    public function getPromedio()
    {
        $parcial1 = $this->_parcial1;
        $parcial2 = $this->_parcial2;
        $parcial3 = $this->_parcial3;
        $promedio = 0;

        $promedio = ($parcial1 + $parcial2 + $parcial3)/3;

        $this->_promedio = $promedio;
        return $this->_promedio;
    }

    public function render()
    {
        $this->getPromedio();
        return "El alumno ".$this->_nombre." tiene de promedio =".$this->_promedio;
    }

}