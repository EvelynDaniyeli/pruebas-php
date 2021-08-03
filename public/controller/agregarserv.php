<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $s = new DiseñoServicio();
        $s->Nombre=$Nombre;
        $s->Descripcion=$Descripcion;
        $s->Foto=$Foto;
        $s->Nota=$Nota;
        $s->SERVICIO=$SERVICIO;
        $s->EVENTO=$EVENTO;
        $s->save();
      
      echo  json_encode( $s->all());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
//






