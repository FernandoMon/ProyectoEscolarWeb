<?php
    require_once "../../Config/Autoload.php";
    \Config\Autoload::run();
    // require_once 'Conexion.php';
    use Models\Conexion;
    // use PDO;
    class Maestro{
        private $id_maestro;
        private $nombre_maestro;
        private $apellido_paterno_maestro;
        private $apellido_materno_maestro;
        private $pass_maestro;
        private $status_maestro;
        public $con;

        public function __construct(){
            $this->con = new Conexion();
        }

        public function add(){
            $this->id_maestro = $_POST['id'];
            $this->nombre_maestro = $_POST['nombre'];
            $this->apellido_paterno_maestro = $_POST['apellido_pat'];
            $this->apellido_materno_maestro = $_POST['apellido_mat'];
            $this->pass_maestro = $this->id_maestro;
            $this->status_maestro = 'Activo';
            // echo $id;
            $consulta = "SELECT * FROM maestros ORDER BY RIGHT(id_maestro,3) DESC LIMIT 1;";
            $result = $this->con->db->prepare($consulta);
            $result->execute();
            $ids = $result->fetchAll(PDO::FETCH_OBJ);
            // var_dump($ids);
            if(count($ids)==0){
                $this->id_maestro = $this->id_maestro . "001";
                echo $this->id_maestro;
            }else{
                foreach($ids as $id){
                    $oldId = intval(substr($id->id_maestro,6,3))+1;
                    // echo $id->id_materia;
                    echo $oldId;
                    if($oldId>100){
                        $newId = $oldId;
                    }elseif($oldId<10){
                        $newId = "00" . $oldId; 
                    }elseif($oldId<100){
                        $newId = "0" . $oldId;
                    }
                    // echo $newId;
                    $this->id_maestro = $this->id_maestro . $newId; 
                    echo $this->id_maestro;
                }
            }

            $consulta = "INSERT INTO maestros 
            (id_maestro,nombre_maestro,apellido_paterno_maestro,apellido_materno_maestro,pass_maestro,status_maestro) 
            VALUES (:id, :nombre, :apellidoPat, :apellidoMat, :pass, :stat)";
            $result = $this->con->db->prepare($consulta);
            if($result->execute([":id"=>$this->id_maestro,":nombre"=>$this->nombre_maestro,":apellidoPat"=>$this->apellido_paterno_maestro, ":apellidoMat"=>$this->apellido_materno_maestro, ":pass"=>$this->pass_maestro, ":stat"=>$this->status_maestro])){
                ?>
                <script> 
                    window.location.replace('ConsultarMaestros.php'); 
                </script>
                <?php
                // print "Registro creado";
            }else{
                print "El registro no se creo";
            }
        }

        public function consultar(){
            $consulta = "SELECT * FROM maestros WHERE status_maestro='Activo';";
            $result = $this->con->db->prepare($consulta);
            $result->execute();
            $maestros = $result->fetchAll(PDO::FETCH_OBJ);
            return $maestros;
        }

        public function consultarInactivos(){
            $consulta = "SELECT * FROM maestros WHERE status_maestro='Inactivo';";
            $result = $this->con->db->prepare($consulta);
            $result->execute();
            $maestros = $result->fetchAll(PDO::FETCH_OBJ);
            return $maestros;
        }

        public function modificar(){
            $this->id_maestro = $_POST['id'];
            $this->nombre_maestro = $_POST['nombre'];
            $this->apellido_paterno_maestro = $_POST['apellido_pat'];
            $this->apellido_materno_maestro = $_POST['apellido_mat'];
            $this->pass_maestro = $_POST['pass'];
            $this->status_maestro = $_POST['status'];

            echo $this->id_maestro;
            echo '<br>';
            echo $this->nombre_maestro;
            echo '<br>';
            echo $this->apellido_paterno_maestro;
            echo '<br>';
            echo $this->apellido_materno_maestro;
            echo '<br>';
            echo $this->pass_maestro;
            echo '<br>';
            echo $this->status_maestro;
            echo '<br>';


            $consulta = "UPDATE maestros SET nombre_maestro=:nombre, apellido_paterno_maestro=:apPat, apellido_materno_maestro=:apMat, pass_maestro=:pass, status_maestro=:stat WHERE id_maestro=:id;";
            $result = $this->con->db->prepare($consulta);
            if($result->execute([":nombre" => trim($this->nombre_maestro),":apPat" => trim($this->apellido_paterno_maestro), ":apMat" => trim($this->apellido_materno_maestro), ":pass" => trim($this->pass_maestro), ":stat" => trim($this->status_maestro), ":id" => trim($this->id_maestro)])){
                ?>
                <script> 
                    window.location.replace('ConsultarMaestros.php'); 
                </script>
                <?php
            }else{
                print "El registro no se creo";
            }
        }

        public function eliminar(){
            $id_mat = $_POST['id'];
            $consulta = "DELETE FROM maestros WHERE id_maestro=:id;";
            $result = $this->con->db->prepare($consulta);
            if($result->execute([":id" => trim($id_mat)])){
                ?>
                <script> 
                    window.location.replace('ConsultarMaestros.php'); 
                </script>
                <?php
            }else{
                print "El registro no se creo";
            }
        }


    }

?>