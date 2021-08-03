<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Persona
     */
    
    class Evento extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["Nombre"];
        protected $table = "Eventos";
        public $Nombre = "";
    }
