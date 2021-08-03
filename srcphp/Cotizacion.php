<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Persona
     */
    
    class Cotizacion extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["Estatus","CLIENTE","fechacot","DETALLE_PEDIDO","anticipo","totalpagar","notas"];
        protected $table = "Cotizaciones";
        public $Estatus = "";
        public $CLIENTE = "";
        public $fechacot = "";
        public $DETALLE_PEDIDO = "";
        public $anticipo = "";   
        public $totalpagar = "";
        public $notas = "";
    }
