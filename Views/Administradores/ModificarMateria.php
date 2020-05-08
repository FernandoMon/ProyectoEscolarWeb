<?php
    use Views\Template;
    require_once "Template/Template.php";
    $obj = new Template;
    require_once "../../Models/Materia.php";
    if(isset($_POST['id']) && isset($_POST['nombre'])){
        $obj = new Materia();
        $obj->modificar($_POST);
    } 
    // echo $_GET['id'];
    
    // $materias = $obj->consultarUno($_GET['id']);
    // foreach($materias as $materia){
    //     $this->id = $materia->id_materia;
    // }
?>
<link rel="stylesheet" type="text/css" href="Template/css/input.css"/>
<h1>Modificar Materia</h1>
<form method="POST" action="">
    <div class="formHorizontal">
        <div class="contenedorInput">
            <div class="group">  
    
                <h5 style="color: #999;">ID</h5>    
              <input type="text" class="inp" name="id" id="id" required readonly="true" value="<?php echo $_GET['id']?>">
              <span class="highlight"></span>
              <span class="bar"></span>
            </div>
        </div>
        <div class="contenedorInput">
            <div class="group">  
            <h5 style="color: #999;">Nombre</h5>    
              <input class="inp" type="text" name="nombre" id="nombre" required value="<?php echo $_GET['nombre']?>">
              <span class="highlight"></span>
              <span class="bar"></span>
              <!-- <label class="lab">Nombre de la materia</label> -->
            </div>
        </div>
        <div class="contenedorInput">
            <h5 style="color: #999;">Grado de la materia</h5>
            <br>
            <select name="grado" id="grado">

                <?php
                    if($_GET['grado']=='03'){
                        echo '
                            <option value="01">Primer grado</option>
                            <option value="02">Segundo grado</option>
                            <option value="03" selected>Tercer grado</option>
                        ';
                    }
                    if($_GET['grado']=='02'){
                        echo '
                            <option value="01">Primer grado</option>
                            <option value="02" selected>Segundo grado</option>
                            <option value="03">Tercer grado</option>
                        ';
                    }
                    if($_GET['grado']=='01'){
                        echo '
                            <option value="01" selected>Primer grado</option>
                            <option value="02">Segundo grado</option>
                            <option value="03">Tercer grado</option>
                        ';
                    }
                ?>

            </select>
        </div>
    </div>
    <div class="contenedorInput">
            <h5 style="color: #999;">Estatus</h5>
            <select name="status" id="status">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>
        <br>
        <br>
    <button type="submit" class="botonForm">Guardar</button>
</form>