<?php
    use Views\Template;
    require_once "Template/Template.php";
    $obj = new Template;
    require_once "../../Models/Administrador.php";
    if(isset($_POST['id']) && isset($_POST['nombre'])){
        $obj = new Administrador();
        $obj->eliminar($_POST);
    } 
?>
<link rel="stylesheet" type="text/css" href="Template/css/input.css"/>
<h1>Eliminar Administrador</h1>
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
    
    <button type="submit" class="botonForm">Eliminar</button>
</form>