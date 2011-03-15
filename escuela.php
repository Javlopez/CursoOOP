<?php
function __autoload($class)
{
    include_once(strtolower($class).".php");
}


$datos = array('id' => 145,
                'nombre' => 'javier',
                'edad' => 26,
                'sexo' => 'masculino',
                'plantel' => 'telmexhub');

$alumnoa = new Alumno($datos);
$alumnoa->setParcial1(10);
$alumnoa->setParcial2(5);
$alumnoa->setParcial3(8);
echo $alumnoa->render();

echo "<hr><hr>";
$datos = array('id' => 145,
                'nombre' => 'javier2',
                'edad' => 26,
                'sexo' => 'masculino',
                'plantel' => 'telmexhub',
                'generacion' => '2010');

$egresado1 = new Egresado($datos);
echo $egresado1->render();



?>
