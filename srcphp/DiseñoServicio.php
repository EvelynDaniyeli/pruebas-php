<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Persona
     */
    
    class DiseñoServicio extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["Nombre","Descripcion","Foto","Nota","SERVICIO","EVENTO"];
        protected $table = "diserv";
        public $Nombre = "";
        public $Descripcion = "";
        public $Foto = "";
        public $Nota = "";   
        public $SERVICIO = "";
        public $EVENTO = "";
    }
