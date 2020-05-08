<?php
    require_once "../../Config/Autoload.php";
    \Config\Autoload::run();
    // require_once 'Conexion.php';
    use Models\Conexion;
    // use PDO;
    class Administrador{
        private $id_admin;
        private $nombre_admin;
        private $apellido_paterno_admin;
        private $apellido_materno_admin;
        private $pass_admin;
        public  $con;

        public function __construct(){
            $this->con = new Conexion();
        }

        public function add(){
            $this->id_admin = $_POST['id'];
            $this->nombre_admin = $_POST['nombre'];
            $this->apellido_paterno_admin = $_POST['apellido_pat'];
            $this->apellido_materno_admin = $_POST['apellido_mat'];
            $this->pass_admin = $this->id_admin;
            // echo $id;
            $consulta = "SELECT * FROM admins ORDER BY RIGHT(id_admin,3) DESC LIMIT 1;";
            $result = $this->con->db->prepare($consulta);
            $result->execute();
            $ids = $result->fetchAll(PDO::FETCH_OBJ);
            // var_dump($ids);
            if(count($ids)==0){
                $this->id_admin = $this->id_admin . "001";
                echo $this->id_admin;
            }else{
                foreach($ids as $id){
                    $oldId = intval(substr($id->id_admin,6,3))+1;
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
                    $this->id_admin = $this->id_admin . $newId; 
                    // echo $this->id_admin;
                }
            }

            $consulta = "INSERT INTO admins 
            (id_admin,nombre_admin,apellido_paterno_admin,apellido_materno_admin,pass_admin) 
            VALUES (:id, :nombre, :apellidoPat, :apellidoMat, :pass)";
            $result = $this->con->db->prepare($consulta);
            if($result->execute([":id"=>$this->id_admin,":nombre"=>$this->nombre_admin,":apellidoPat"=>$this->apellido_paterno_admin, ":apellidoMat"=>$this->apellido_materno_admin, ":pass"=>$this->pass_admin])){
                ?>
                <script> 
                    window.location.replace('ConsultarAdministradores.php'); 
                </script>
                <?php
                // print "Registro creado";
            }else{
                print "El registro no se creo";
            }
        }

        public function consultar(){
            $consulta = "SELECT * FROM admins";
            $result = $this->con->db->prepare($consulta);
            $result->execute();
            $admins = $result->fetchAll(PDO::FETCH_OBJ);
            return $admins;
        }


        public function modificar(){
            $this->id_admin = $_POST['id'];
            $this->nombre_admin = $_POST['nombre'];
            $this->apellido_paterno_admin = $_POST['apellido_pat'];
            $this->apellido_materno_admin = $_POST['apellido_mat'];
            // $this->pass_admin = $_POST['pass'];
            // $this->status_admin = $_POST['status'];

            // echo $this->id_admin;
            // echo '<br>';
            // echo $this->nombre_admin;
            // echo '<br>';
            // echo $this->apellido_paterno_admin;
            // echo '<br>';
            // echo $this->apellido_materno_admin;
            // echo '<br>';
            // echo $this->pass_admin;
            // echo '<br>';
            // echo $this->status_admin;
            // echo '<br>';


            $consulta = "UPDATE admins SET nombre_admin=:nombre, apellido_paterno_admin=:apPat, apellido_materno_admin=:apMat WHERE id_admin=:id;";
            $result = $this->con->db->prepare($consulta);
            if($result->execute([":nombre" => trim($this->nombre_admin),":apPat" => trim($this->apellido_paterno_admin), ":apMat" => trim($this->apellido_materno_admin), ":id" => trim($this->id_admin)])){
                ?>
                <script> 
                    window.location.replace('ConsultarAdministradores.php'); 
                </script>
                <?php
            }else{
                print "El registro no se creo";
            }
        }

        public function eliminar(){
            $this->id_admin = $_POST['id'];
            $consulta = "DELETE FROM admins WHERE id_admin=:id;";
            $result = $this->con->db->prepare($consulta);
            if($result->execute([":id" => trim($this->id_admin)])){
                ?>
                <script> 
                    window.location.replace('ConsultarAdministradores.php'); 
                </script>
                <?php
            }else{
                print "El registro no se creo";
            }
        }
    }


?>