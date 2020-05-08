<?php
    require_once "../../Config/Autoload.php";
    \Config\Autoload::run();
    // require_once 'Conexion.php';
    use Models\Conexion;
    // use PDO;
    class Materia{
        private $id_materia;
        private $nombre_materia;
        private $status_materia;
        private $status_grupo;
        private $grado_materia;
        public $con;

        public function __construct(){
            $this->con = new Conexion();
        }

        public function add(){
            $id_m = $_POST['id'];
            $nombre = $_POST['nombre'];
            $grado = $_POST['grado'];
            // echo $id;
            $consulta = "SELECT * FROM materias ORDER BY RIGHT(id_materia,3) DESC LIMIT 1;";
            $result = $this->con->db->prepare($consulta);
            $result->execute();
            $ids = $result->fetchAll(PDO::FETCH_OBJ);
            foreach($ids as $id){
                $oldId = intval(substr($id->id_materia,8,3))+1;
                // echo $id->id_materia;
                // echo $oldId;
                if($oldId>100){
                    $newId = $oldId;
                }elseif($oldId<10){
                    $newId = "00" . $oldId; 
                }elseif($oldId<100){
                    $newId = "0" . $oldId;
                }
                // echo $newId;
                $id_m = $id_m . $newId; 
                // echo $id_m;
            }

            $consulta = "INSERT INTO materias 
            (id_materia,nombre_materia,status_materia,grado_materia) 
            VALUES (:id, :nombre, :stat, :grado)";
            $result = $this->con->db->prepare($consulta);
            if($result->execute([":id"=>$id_m,":nombre"=>$nombre,":stat"=>'Activo',":grado"=>$grado])){
                ?>
                <script> 
                    window.location.replace('ConsultarMateria.php'); 
                </script>
                <?php
                // print "Registro creado";
            }else{
                print "El registro no se creo";
            }
        }

        public function consultar(){
            $consulta = "SELECT * FROM materias WHERE status_materia='Activo';";
            $result = $this->con->db->prepare($consulta);
            $result->execute();
            $materias = $result->fetchAll(PDO::FETCH_OBJ);
            return $materias;
        }

        public function consultarInactivos(){
            $consulta = "SELECT * FROM materias WHERE status_materia='Inactivo';";
            $result = $this->con->db->prepare($consulta);
            $result->execute();
            $materias = $result->fetchAll(PDO::FETCH_OBJ);
            return $materias;
        }

        public function consultarUno($id){
            $consulta = "SELECT * FROM materias WHERE id_materia='".$id."';";
            $result = $this->con->db->prepare($consulta);
            $result->execute();
            $materias = $result->fetchAll(PDO::FETCH_OBJ);
            return $materias;
        }

        public function modificar(){
            $id_mat = $_POST['id'];
            $nombre_mat = $_POST['nombre'];
            $grado_mat = $_POST['grado'];
            $status_mat = $_POST['status'];


            $consulta = "UPDATE materias SET nombre_materia=:nombre, status_materia=:stat, grado_materia=:grado WHERE id_materia=:id;";
            $result = $this->con->db->prepare($consulta);
            if($result->execute([":nombre" => trim($nombre_mat),":stat" => $status_mat, ":grado" => $grado_mat, ":id" => trim($id_mat)])){
                ?>
                <script> 
                    window.location.replace('ConsultarMateria.php'); 
                </script>
                <?php
            }else{
                print "El registro no se creo";
            }
        }

        public function eliminar(){
            $id_mat = $_POST['id'];
            $consulta = "DELETE FROM materias WHERE id_materia=:id;";
            $result = $this->con->db->prepare($consulta);
            if($result->execute([":id" => trim($id_mat)])){
                ?>
                <script> 
                    window.location.replace('ConsultarMateria.php'); 
                </script>
                <?php
            }else{
                print "El registro no se creo";
            }
        }
    }

    // $obj = new Materia();

?>