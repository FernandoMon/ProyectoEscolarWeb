<?php
    use Views\Template;
    require_once "Template/Template.php";
    $obj = new Template;
    require_once "../../Models/Materia.php";
    // if(isset($_POST['id']) && isset($_POST['nombre'])){
    //     $obj = new Materia();
    //     $obj->add($_POST);
    // } 
?>
<div>
    <h1>Materias Inactivas</h1>
    <a href="ConsultarMateria.php">Mostrar elementos Activos</a>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Status</th>
                <th>Grado</th>
                <th>Ajustes</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                $obj = new Materia();
                $materias = $obj->consultarInactivos();
                foreach($materias as $materia){
            ?>        
                    <tr>
                    <td class="numero">
            <?php
                    echo $materia->id_materia; 
            ?>
                    </td>
                    <td class="nombre">
            <?php
                    echo $materia->nombre_materia; 
            ?>
                    </td>
                    
            <?php
                    echo "<td>$materia->status_materia</td>"; 
                    echo "<td class='grado'>$materia->grado_materia</td>"; 
                    echo "<td><button class='boton btn btn-primary'>Activar</button> 
                        <button class='botonEliminar btn btn-primary'>Eliminar</button></td>";     
                }
            ?>
            </tr>
        </tbody>
        <tfoot>
            
            <tr>
            <th>ID</th>
                <th>Nombre</th>
                <th>Status</th>
                <th>Grado</th>
                <th>Ajustes</th>
            </tr>
        </tfoot>
    </table>
</div>

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>