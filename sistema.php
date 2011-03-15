<?php
function __autoload($class){
    include_once(strtolower($class).".php");
}


$Database = new DbManager();
echo $users = $Database->select('users',' """    js  """"          """               ');


?>
