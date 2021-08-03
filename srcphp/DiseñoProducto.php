<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Persona
     */
    
    class DiseñoProducto extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["Nombredis","Descripcion","Foto","Nota","PRODUCTO","EVENTO"];
        protected $table = "diseñopro";
        public $Nombredis = "";
        public $Descripcion = "";
        public $Foto = "";
        public $Nota = "";   
        public $PRODUCTO = "";
        public $EVENTO = "";
    }
