<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $c = new Cliente();
        $c->Nombre=$Nombre;
        $c->Correo=$Correo;
        $c->Telefono=$Telefono;
        $c->Passwordd=$Passwordd;
        $c->save();
      
      
      echo  json_encode( $c->all());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
//






