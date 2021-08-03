<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Persona
     */
    
    class Pedido extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["Fecha","DIRECCION","CLIENTE"];
        protected $table = "Pedidos";
        public $Fecha = "";
        public $DIRECCION = "";
        public $CLIENTE = "";

    }
