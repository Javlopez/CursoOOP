<?php
/**
 * Description of abstractas
 *
 * @author ajaxman
 */
abstract class Tools{

    public $var;

    public function upper($a = '')
    {
        return strtoupper($a);
    }

    abstract public function test();
}

interface DB{

    public function connection($config = array());
}

interface Security {
    public function xssClean($abs = array());
}

class Abstractas extends Tools implements DB{
    //put your code here

    public function connection($config = array())
    {
        echo "Conexión realizada";
    }

    public function xssClean($param = array())
    {
        //empty
    }
    public function test()
    {
        parent::upper('snbjenjfeAAQQA');
        echo "hola";
    }
    

    public function getName($param = 'name')
    {
        return $param;
    }
}

$obj = new Abstractas();
echo $obj->getName('PHP');

?>
