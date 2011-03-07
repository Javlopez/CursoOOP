<?php
/**
 * Description of persona
 *
 * @author ajaxman
 */
class Persona{

    /**
     *
     * @var int $_id;
     *
     */
    protected $_id = 0;
    protected $_nombre = '';
    protected $_edad = NULL;
    protected $_sexo = '';
    protected $_plantel = '';


    public function  __construct($data = array())
    {
        if(isset($data['id'])){
            $this->_id = $data['id'];
        }
        if(isset($data['nombre'])){
            $this->_nombre = $this->_setName($data['nombre']);
        }
        if(isset($data['edad'])){
            $this->_edad = $data['edad'];
        }
        if(isset($data['sexo'])){
            $this->_sexo = $data['sexo'];
        }
        if(isset($data['plantel'])){
            $this->_plantel = $data['plantel'];
        }

    }

    private function _setName($name = '')
    {
        return strtoupper($name);
    }
    
}