<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Persona
     */
    
    class Detalle_pedido extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["PEDIDO","PRODUCTO","SERVICIO","EVENTO"];
        protected $table = "Detalle_pedido";
        public $PEDIDO = "";
        public $PRODUCTO = "";
        public $SERVICIO = "";
        public $EVENTO = "";
    }
