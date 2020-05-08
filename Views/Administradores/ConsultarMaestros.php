<?php
    use Views\Template;
    require_once "Template/Template.php";
    $obj = new Template;
    require_once "../../Models/Maestro.php";
    // if(isset($_POST['id']) && isset($_POST['nombre'])){
    //     $obj = new Materia();
    //     $obj->add($_POST);
    // } 
?>
<div>
    <h1>Maestros</h1>
    <a href="ConsultarMaestrosInactivos.php">Mostrar Maestros Inactivos</a>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Contraseña</th>
                <th>Ajustes</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                $obj = new Maestro();
                $maestros = $obj->consultar();
                foreach($maestros as $maestro){
            ?>        
                    <tr>
                    <td class="numero">
            <?php
                    echo $maestro->id_maestro; 
            ?>
                    </td>
                    <td class="nombre">
            <?php
                    echo $maestro->nombre_maestro; 
            ?>
                    </td>
                    
            <?php
                    echo "<td class='apPat'>$maestro->apellido_paterno_maestro</td>"; 
                    echo "<td class='apMat'>$maestro->apellido_materno_maestro</td>"; 
                    echo "<td class='pass'>$maestro->pass_maestro</td>"; 
                    echo "<td><button class='botonModificarMaestro btn btn-primary'>Modificar</button></td>";     
                }
            ?>
            </tr>
        </tbody>
        <tfoot>
            
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Contraseña</th>
                <th>Ajustes</th>
            </tr>
        </tfoot>
    </table>
</div>
