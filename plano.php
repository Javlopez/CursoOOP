<?php
/**
 * Description of plano
 *
 * @author ajaxman
 */
interface Plano {

    public function query($name);
    
}
interface Security {
    
    public function xssClean($abs = array());
}

class Database implements Plano, Security {

    public function query($name){ }
    public function xssClean($params = array())
    {
        /*
         * code
         */
    }

    public function getMetodo()
    {
        echo __METHOD__;
    }
}

$obj = new Database();
$obj->getMetodo();

?>
