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
        protected $filleable = ["CLIENTE","PRODUCTO","SERVICIO","EVENTO","CantidadProducto","CantidadServicio"];
        protected $table = "Detalle_pedido";
        public $CLIENTE = "";
        public $PRODUCTO = "";
        public $SERVICIO = "";
        public $EVENTO = "";
        public $CantidadProducto = "";
        public $CantidadServicio = "";
    }
