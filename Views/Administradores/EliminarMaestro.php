<?php
    use Views\Template;
    require_once "Template/Template.php";
    $obj = new Template;
    require_once "../../Models/Maestro.php";
    if(isset($_POST['id']) && isset($_POST['nombre'])){
        $obj = new Maestro();
        $obj->eliminar($_POST);
    } 
?>
<link rel="stylesheet" type="text/css" href="Template/css/input.css"/>
<h1>Eliminar Maestro</h1>
<form method="POST" action="">
    <div class="contenedorInput">
        <div class="group">      
            <input type="text" class="inp" name="id" id="id" required readonly="true" value="<?php echo trim($_GET['id'])?>">
            <span class="highlight"></span>
            <span class="bar"></span>
        </div>
    </div>
    <div class="formHorizontal">
        <div class="contenedorInput">
            <div class="group">      
              <input class="inp" type="text" name="nombre" id="nombre" required value="<?php echo trim($_GET['nombre'])?>">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label class="lab">Nombre</label>
            </div>
        </div>
        <div class="contenedorInput">
            <div class="group">      
              <input class="inp" type="text" name="apellido_pat" id="apellido_pat" required value="<?php echo $_GET['apPat']?>">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label class="lab">Apellido Paterno</label>
            </div>
        </div>
        <div class="contenedorInput">
            <div class="group">      
              <input class="inp" type="text" name="apellido_mat" id="apellido_mat" required value="<?php echo $_GET['apMat']?>">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label class="lab">Apellido Materno</label>
            </div>
        </div>
    </div>
    <div class="formHorizontal">
        <div class="contenedorInput">
            <div class="group">      
              <input class="inp" type="text" name="pass" id="pass" required value="<?php echo $_GET['pass']?>">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label class="lab">Password</label>
            </div>
        </div>
        <div class="contenedorInput">
                <h5 style="color: #999;">Estatus</h5>
                <select name="status" id="status">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
    </div>
    <button type="submit" class="botonForm">Eliminar</button>
</form>