<?php
    use Views\Template;
    require_once "Template/Template.php";
    $obj = new Template;
    require_once "../../Models/Administrador.php";
    // if(isset($_POST['id']) && isset($_POST['nombre'])){
    //     $obj = new Materia();
    //     $obj->add($_POST);
    // } 
?>
<div>
    <h1>Administradores</h1>
    <!-- <a href="#">Mostrar Administradores Inactivos</a> -->
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Ajustes</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                $obj = new Administrador();
                $admins = $obj->consultar();
                foreach($admins as $admin){
            ?>        
                    <tr>
                    <td class="numero">
            <?php
                    echo $admin->id_admin; 
            ?>
                    </td>
                    <td class="nombre">
            <?php
                    echo $admin->nombre_admin; 
            ?>
                    </td>
                    
            <?php
                    echo "<td class='apPat'>$admin->apellido_paterno_admin</td>"; 
                    echo "<td class='apMat'>$admin->apellido_materno_admin</td>"; 
                    echo "<td><button class='botonModificarAdmin btn btn-primary'>Modificar</button> ";     
                    echo "<button class='botonEliminarAdmin btn btn-primary'>Eliminar</button></td>";     
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
                <th>Ajustes</th>
            </tr>
        </tfoot>
    </table>
</div>
