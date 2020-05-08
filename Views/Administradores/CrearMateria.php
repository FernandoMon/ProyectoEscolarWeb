<?php
    use Views\Template;
    require_once "Template/Template.php";
    $obj = new Template;
    require_once "../../Models/Materia.php";
    if(isset($_POST['id']) && isset($_POST['nombre'])){
        $obj = new Materia();
        $obj->add($_POST);
    } 
?>
<link rel="stylesheet" type="text/css" href="Template/css/input.css"/>
<h1>Crear Materia</h1>
<form method="POST" action="">
    <div class="formHorizontal">
        <div class="contenedorInput">
            <div class="group">      
              <input type="text" class="inp" name="id" id="id" required readonly="true" value="">
              <span class="highlight"></span>
              <span class="bar"></span>
            </div>
        </div>
        <div class="contenedorInput">
            <div class="group">      
              <input class="inp" type="text" name="nombre" id="nombre" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label class="lab">Nombre de la materia</label>
            </div>
        </div>
        <div class="contenedorInput">
            <h5 style="color: #999;">Grado de la materia</h5>
            <select name="grado" id="grado">
                <option value="01">Primer grado</option>
                <option value="02">Segundo grado</option>
                <option value="03">Tercer grado</option>

            </select>
        </div>
    </div>
    <button type="submit" class="botonForm">Guardar</button>
</form>


<script>
    let selectNombre = document.getElementById('nombre');
    let selectGrado = document.getElementById('grado') 
    let cadenaid = 'SBJ';
    selectNombre.addEventListener('change', (e)=>{
        cadenaid = cadenaid + selectNombre.value.substring(0,3);
        const resultado =  document.getElementById('id');
        resultado.value = cadenaid;
    });
    selectGrado.addEventListener('change', (e)=>{
        cadenaid = cadenaid + selectGrado.value.substring(0,2);
        const resultado =  document.getElementById('id');
        resultado.value = cadenaid;
    });
    
</script>