<?php namespace Models;

    use PDOException;
    use PDO;
    
    class Conexion{

        private $datos = array(
            "host" => "localhost",
            "user" => "root",
            "pass" => "",
            "db" => "colegio_web"
        );
        public $db;

        public function __construct(){
            try {
                #conexion con MySQL
                $this->db = new PDO ("mysql:host=".$this->datos['host'].";
                dbname=".$this->datos['db']."",
                "".$this->datos['user']."",
                "".$this->datos['pass']."");
                // echo 'Estas conectado';
            } catch (PDOException $e) {
                echo $e->getMessage();
                // echo "No se conecto";
            }
        }

        public function consultaSimple($sql){}

        public function consultaRetorno($sql){}

    }

    // $obj = new Conexion();
    //$obj->__construct();

?>