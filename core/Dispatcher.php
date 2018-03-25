<?php
include 'Way.php'; 
class Dispatcher { 
      private $controller;
      private $action;

     public function __construct($router) {
      $this->controller = 'default'; 
      $this->action = 'error'; 

      if(empty($router[0]) && empty($router[1])){
        header('location:vista/index.php');
      }else{

        $this->controller = $router[1]."Controller"; 
        $this->action = $router[2]; 
        $this->direccionar();
      
           }
     } 

     public function direccionar()
     {
       $ruta = getcwd();
           
           $controllerLocation = $ruta . '\controller\\' . $this->controller . '.php'; 

           if( file_exists( $controllerLocation ) ) { 
                 include_once( $controllerLocation ); 
           } else { 
                 throw new Exception("No se encuentra el controlador $controllerLocation"); 
           } 

           if( class_exists( $this->controller, false ) ) { 
                  $cont = new $this->controller(); 
           } else { 
                  throw new Exception( "Controller Class not found $controller" ); 
           } 

           if( method_exists ( $cont, $this->action ) ) { 
                  $algo = $this->action;                 
                  $cont->$algo(); 
           } else { 
                   throw new Exception( "Action not callable $action" ); 
           } 
     }

}  




//pagina.com/index.php?controller=Clientes&action=verClientes