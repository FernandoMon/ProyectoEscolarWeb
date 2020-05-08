<?php
    use Views\Template;
    require_once "Template/Template.php";
    $obj = new Template;
    require_once "../../Models/Administrador.php";
    if(isset($_POST['id']) && isset($_POST['nombre'])){
        $obj = new Administrador();
        $obj->add($_POST);
    } 
?>
<link rel="stylesheet" type="text/css" href="Template/css/input.css"/>
<h1>Crear Administrador</h1>
<form method="POST" action="">
    <div class="contenedorInput">
        <div class="group">      
            <input type="text" class="inp" name="id" id="id" required readonly="true" value="">
            <span class="highlight"></span>
            <span class="bar"></span>
        </div>
    </div>
    <div class="formHorizontal">
        <div class="contenedorInput">
            <div class="group">      
              <input class="inp" type="text" name="nombre" id="nombre" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label class="lab">Nombre</label>
            </div>
        </div>
        <div class="contenedorInput">
            <div class="group">      
              <input class="inp" type="text" name="apellido_pat" id="apellido_pat" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label class="lab">Apellido Paterno</label>
            </div>
        </div>
        <div class="contenedorInput">
            <div class="group">      
              <input class="inp" type="text" name="apellido_mat" id="apellido_mat" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label class="lab">Apellido Materno</label>
            </div>
        </div>
    </div>
    <button type="submit" class="botonForm">Guardar</button>
</form>


<script>
    let selectNombre = document.getElementById('nombre');
    let selectApellidoPat = document.getElementById('apellido_pat') 
    let selectApellidoMat = document.getElementById('apellido_mat') 
    let cadenaid = 'ADM';
    selectNombre.addEventListener('change', (e)=>{
        cadenaid = cadenaid + selectNombre.value.substring(0,1);
        const resultado =  document.getElementById('id');
        resultado.value = cadenaid;
    });
    selectApellidoPat.addEventListener('change', (e)=>{
        cadenaid = cadenaid + selectApellidoPat.value.substring(0,1);
        const resultado =  document.getElementById('id');
        resultado.value = cadenaid;
    });
    selectApellidoMat.addEventListener('change', (e)=>{
        cadenaid = cadenaid + selectApellidoMat.value.substring(0,1);
        const resultado =  document.getElementById('id');
        resultado.value = cadenaid;
    });
    
</script>