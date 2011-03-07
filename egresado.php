<?php
/**
 * Description of egresado
 *
 * @author ajaxman
 */
class Egresado extends Persona {

    private $_generacion = 'Sin generacion';

    public function  __construct($data = array()) {
        parent::__construct($data);
        if(isset($data['generacion'])){
            $this->_generacion = $data['generacion'];
        }
    }

    public function render()
    {
        return "El alumno ".$this->_nombre." del plantel ".
                $this->_plantel." fue de la generacion".
                $this->_generacion;
    }

}
?>
