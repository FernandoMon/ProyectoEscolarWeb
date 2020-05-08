<?php namespace Models;

    require_once "../Config/Autoload.php";
    \Config\Autoload::run();
    use PDO;
    class Alumno{
        private $id_alumno;
        private $nombre_alumno;
        private $apellido_paterno_alumno;
        private $apellido_materno_alumno;
        private $password_alumno;
        private $id_grupo;
        private $status_alumno;
        private $con;

        public function __construct(){
            $this->con = new Conexion();
            echo 'Hola a todos desde Alumno __construct';
        }

        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }

        public function hola(){
            echo "Hola soy un alumno";
        }

        public function listarAlumnos(string $id){
            //require_once '../public/conexion.php';
            $sentencia = $this->db->query("SELECT * FROM alumnos;");
            $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
            

            foreach ($alumnos as $alumno){
                echo $alumno->id_alumno;
                echo $alumno->nombre_alumno;
                echo $alumno->apeido_materno_alumno;
                echo $alumno->apeido_paterno_alumno;
                echo $alumno->apeido_paterno_alumno;
                echo $alumno->id_grupo;
                echo $alumno->generacion_alumno;
                echo '<br>';
            }

        }

        public function infoALumno($id){
            //require_once '../public/conexion.php';
            $sentencia = $this->db->query("SELECT * FROM alumnos WHERE id_alumno='".$id."';");
            $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
            

            foreach ($alumnos as $alumno){
                echo $alumno->id_alumno;
                echo $alumno->nombre_alumno;
                echo $alumno->apeido_materno_alumno;
                echo $alumno->apeido_paterno_alumno;
                echo $alumno->apeido_paterno_alumno;
                echo $alumno->id_grupo;
                echo $alumno->generacion_alumno;
                echo '<br>';
            }
        }
    }

    $obj = new Alumno();

?>