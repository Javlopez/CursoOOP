<?php

class User {
    //propiedades
    //$a=;$a
    private $saludo = 'Mundo';   //metodos
    private $total  = 0;

    public function setSaludo($name = 'Mundo')
    {
        $this->saludo = $name;
    }

    public function setTotal($total = 10)
    {
        $this->total = $total;
    }

    public function mensaje()
    {
        $name  = $this->saludo;
        $msg   = "Hola ".strtoupper($name);
        $this->saludo = $msg.$this->total;
        $msg2  = $this->HTML();
        return $msg2;
    }

    public function HTML()
    {
        $render = '<h1>'.$this->saludo.'</h1>';
        $render .= '<hr />';
        //$render .= '<hr />';
        return $render;
    }

    
}

$user = new User();
$user->setSaludo('Todos');
$user->setTotal(10);
//$user->HTML();
echo $user->mensaje();
//$cliente = new User();
//$vendedor = new User();
//$tipoSaludo = $user->saludo('grupo');
//echo $user->a;
//echo $tipoSaludo;
//echo $user->a;

//private
//protected
//public

//saludo();





/*

echo "<h1>Taller PHP OOP </h1><br /> Registro!!<hr />
    REcuerda<br />
    Algun editor de codigo
    -Dreamweaver
    -Notepad++
    -Netbeans
    -Rapidphp
    -Aptana";
*/

?>
 
