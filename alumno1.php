<?php
/**
 * Description of Alumno
 *
 * @author ajaxman
 */
class Alumno {
    //put your code here
    private $id;
    private $alumno;
    private $edad;
    private $clase;
    private $parcial1;
    private $parcial2;
    private $parcial3;
    private $promedio;
    private $extras = 0;

    /*
    public function  __call($method,$params)
    {
        echo $method;
    }
     *
     */

    public function  __destruct()
    {
        echo "<hr>se a finalizado la clase</hr>";
    }
/*
    public function __
    {

    }
 */

    public function  __construct($datos = array())
    {
            $this->id = $datos['id'];
            $this->alumno = $datos['alumno'];
            $this->edad = $datos['edad'];
            $this->clase = $datos['clases'];
            $this->parcial1 = $datos['parcial1'];
            $this->parcial2 = $datos['parcial2'];
            $this->parcial3 = $datos['parcial3'];
            if(isset($datos['extras']) && !empty($datos['extras'])){
                 $this->_extras($datos['extras']);
            }
    }

    public function esteMetodo()
    {
        echo __METHOD__;
        echo "<br>";
        echo __CLASS__;
    }


    
    public function  __toString()
    {
        //echo "<h1>Ejecutando un metodo to string</h1>";
        echo $this->promedio();
    }
     
     
/*
    public function setData($datos = array())
    {
        //if(count($datos) == 8){
            $this->id = $datos['id'];
            $this->alumno = $datos['alumno'];
            $this->edad = $datos['edad'];
            $this->clase = $datos['clases'];
            $this->parcial1 = $datos['parcial1'];
            $this->parcial2 = $datos['parcial2'];
            $this->parcial3 = $datos['parcial3'];
            if(isset($datos['extras']) && !empty($datos['extras'])){
                 $this->_extras($datos['extras']);
            }
       // }
    }
*/

    private function _extras($puntuacionExtra = 0)
    {
        $puntuacionExtra = (int) $puntuacionExtra;
        $this->extras = $puntuacionExtra/10;
        return $this->extras;
    }

    public function promedio()
    {
        $parcial1 = $this->parcial1;
        $parcial2 = $this->parcial2;
        $parcial3 = $this->parcial3;
        $promedio = 0;

        $promedio = ($parcial1 + $parcial2 + $parcial3)/3;
        $promedio += $this->extras;

        $this->promedio = $promedio;
        return $this->promedio;
    }
}

// 0 -10 = 1
$datos = array('id' => 1,
                'alumno' => 'Rasmus',
                'edad' => 30,
                'clases' => 'php',
                'parcial1' => 10,
                'parcial2' => 5,
                'parcial3' => 10,
                'extras' => 5);

$alumno1 = new Alumno($datos);
//$alumno1->saludo(1);
$alumno1->esteMetodo();
//echo $alumno1;
//echo "<hr>";


//$alumno1->setData($datos);
//$alumno1->extras(10);

//echo $promedioAlumno1 = $alumno1->promedio();
/********************************************/
/*
$datos = array('id' => 1,
                'alumno' => 'Pedro',
                'edad' => 20,
                'clases' => 'html',
                'parcial1' => 8,
                'parcial2' => 5,
                'parcial3' => 8,
                'extras' => 10);
$alumnoA = new Alumno();

//var_dump($alumnoA);
$alumnoA->setData($datos);
$promedioAlumnoA = $alumnoA->promedio();
 *
 */
/********************************************/
//echo "Alumno 1 promedio =".$promedioAlumno1. ' y alumno A promedio = '.$promedioAlumnoA;

//echo $promedio;
//$alumno1->setData();
//echo $alumno1->promedio();
//

?>