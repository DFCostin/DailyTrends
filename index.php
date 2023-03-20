<?php
require_once __DIR__ . '/app/config.php';
require_once __DIR__ . '/app/models.php';
require_once __DIR__ . '/app/controller.php';
require_once __DIR__ . '/app/sesions.php';

$map = array(
    'home' => array('controller' =>'Controller', 'action' =>'home', 'acceso'=>0),
    'viewFeeds' => array('controller' =>'Controller', 'action' =>'viewFeeds', 'acceso'=>0),
    'createFeeds' => array('controller' =>'Controller', 'action' =>'createFeeds', 'acceso'=>0),
    'updateFeeds' => array('controller' =>'Controller', 'action' =>'updateFeeds', 'acceso'=>0),
    'deleteFeeds' => array('controller' =>'Controller', 'action' =>'deleteFeeds', 'acceso'=>0),

);    
   
$sesion= new Sesion();  
if(!isset($_SESSION['nivel'])){
    $_SESSION['nivel']=0;
}

if (isset($_REQUEST['operacion'])) {  
    if (isset($map[$_REQUEST['operacion']])) {
        $ruta = $_REQUEST['operacion'];
    } else {
        $ruta='PaginaError';
    }
} else {
    $ruta = 'home';
}

$controlador = $map[$ruta];

if (method_exists($controlador['controller'], $controlador['action']) && ($controlador['acceso']==0 || $controlador['acceso']<=$_SESSION['nivel'])) {
    call_user_func(array(
        new $controlador['controller'],
        $controlador['action']
    ));
} else {
    if(!($controlador['acceso']==0 || $controlador['acceso']<=$_SESSION['nivel'])){
        echo "Lo sentimos no tiene permisos para acceder a este sitio";
    }else{
        echo " Lo sentimos la ejecucion espefificada no existe :(";
} 
}
?>