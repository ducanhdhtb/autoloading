<?php 
function __autoload($class){
 $class = str_replace("_","/",$class);
 require($class.".php");
}
$php = new models_user();
?>
