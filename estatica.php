<?php

/**
 * Description of estatica
 *
 * @author ajaxman
 */
class Estatica {
    //put your code here
    static public $name = 'Javier';
    const PATH = '/home/www';
   
    static public function hola()
    {
        echo self::PATH;
        $name = self::$name;
        $name = self::upper($name);
        return "Mi metodo estatico mi nombre es".
                $name;
    }

    static  public function upper($text = '')
    {
        return strtoupper($text);
    }
    
}
//$this
//$obj = new Estatica();
echo Estatica::hola();
//echo Estatica::PATH;

//echo "<hr />";
//echo Estatica::$name;
//$obj->name;



/*
$alumno = new Estatica();
$alumno->leerXML();
$alumno->save();*/
?>
