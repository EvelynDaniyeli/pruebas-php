<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Persona
     */
    
    class Producto extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["NombreProducto"];
        protected $table = "Productos";
        public $NombreProducto = "";   
    }
