<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Persona
     */
    
    class Servicio extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["NombreServicio"];
        protected $table = "Servicios";
        public $NombreServicio = "";   
    }
