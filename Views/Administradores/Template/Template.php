<?php namespace Views;

    class Template{
        public function __construct(){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/df7aaa1fc6.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
        
        <link rel="stylesheet" type="text/css" href="Template/css/estilo.css"/>
        <!--  -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $("#ok").click(function() {
                    var valores = "";

                            $(".numero").parent("tr").find("td").each(function() {
                            if($(this).html() != "coger valores de la fila"){
                            valores += $(this).html() + " ";
                        }
                    });
                    
                    valores = valores + "\n";
                    alert(valores);
                });

// ------------------------------------- Materias ------------------------------------------

                $(".boton").click(function() {

                    var id = "";
                    var nombre = "";
                    var grado = "";

                    // Obtenemos todos los valores contenidos en los <td> de la fila
                    // seleccionada
                    $(this).parents("tr").find(".numero").each(function() {
                        id += $(this).html() + "\n";
                    });
                    $(this).parents("tr").find(".nombre").each(function() {
                        nombre += $(this).html() + "\n";
                    });
                    $(this).parents("tr").find(".grado").each(function() {
                        grado += $(this).html() + "\n";
                    });
                    // console.log(id);
                    // alert(valores);
                    location.href="ModificarMateria.php?id="+id+"&nombre="+nombre+"&grado="+grado;
                });
                $(".botonEliminar").click(function() {

                    var id = "";
                    var nombre = "";
                    var grado = "";

                    // Obtenemos todos los valores contenidos en los <td> de la fila
                    // seleccionada
                    $(this).parents("tr").find(".numero").each(function() {
                        id += $(this).html() + "\n";
                    });
                    $(this).parents("tr").find(".nombre").each(function() {
                        nombre += $(this).html() + "\n";
                    });
                    $(this).parents("tr").find(".grado").each(function() {
                        grado += $(this).html() + "\n";
                    });
                    // console.log(id);
                    // alert(valores);
                    location.href="EliminarMateria.php?id="+id+"&nombre="+nombre+"&grado="+grado;
                });

// ------------------------------------- Maestros ------------------------------------------

                $(".botonModificarMaestro").click(function() {

                    var id = "";
                    var nombre = "";
                    var apPat = "";
                    var apMat = "";
                    var pass = "";
                    // alert('me active');

                    // Obtenemos todos los valores contenidos en los <td> de la fila
                    // seleccionada
                    $(this).parents("tr").find(".numero").each(function() {
                        id += $(this).html();
                    });
                    $(this).parents("tr").find(".nombre").each(function() {
                        nombre += $(this).html();
                    });
                    $(this).parents("tr").find(".apPat").each(function() {
                        apPat += $(this).html();
                    });
                    $(this).parents("tr").find(".apMat").each(function() {
                        apMat += $(this).html();
                    });
                    $(this).parents("tr").find(".pass").each(function() {
                        pass += $(this).html();
                    });
                    // console.log(id);
                    // alert(nombre);
                    location.href="ModificarMaestro.php?id="+id+"&nombre="+nombre+"&apPat="+apPat+"&apMat="+apMat+"&pass="+pass;
                });
                $(".botonEliminarMaestro").click(function() {

                    var id = "";
                    var nombre = "";
                    var apPat = "";
                    var apMat = "";
                    var pass = "";
                    // alert('me active');

                    // Obtenemos todos los valores contenidos en los <td> de la fila
                    // seleccionada
                    $(this).parents("tr").find(".numero").each(function() {
                        id += $(this).html();
                    });
                    $(this).parents("tr").find(".nombre").each(function() {
                        nombre += $(this).html();
                    });
                    $(this).parents("tr").find(".apPat").each(function() {
                        apPat += $(this).html();
                    });
                    $(this).parents("tr").find(".apMat").each(function() {
                        apMat += $(this).html();
                    });
                    $(this).parents("tr").find(".pass").each(function() {
                        pass += $(this).html();
                    });
                    // console.log(id);
                    // alert(nombre);
                    location.href="EliminarMaestro.php?id="+id+"&nombre="+nombre+"&apPat="+apPat+"&apMat="+apMat+"&pass="+pass;
                });

// ------------------------------------- Administradores ------------------------------------------

                $(".botonModificarAdmin").click(function() {

                    var id = "";
                    var nombre = "";
                    var apPat = "";
                    var apMat = "";
                    var pass = "";
                    // alert('me active');

                    // Obtenemos todos los valores contenidos en los <td> de la fila
                    // seleccionada
                    $(this).parents("tr").find(".numero").each(function() {
                        id += $(this).html();
                    });
                    $(this).parents("tr").find(".nombre").each(function() {
                        nombre += $(this).html();
                    });
                    $(this).parents("tr").find(".apPat").each(function() {
                        apPat += $(this).html();
                    });
                    $(this).parents("tr").find(".apMat").each(function() {
                        apMat += $(this).html();
                    });
                    // $(this).parents("tr").find(".pass").each(function() {
                    //     pass += $(this).html();
                    // });
                    // console.log(id);
                    // alert(nombre);
                    location.href="ModificarAdmin.php?id="+id+"&nombre="+nombre+"&apPat="+apPat+"&apMat="+apMat;
                });
                $(".botonEliminarAdmin").click(function() {

                    var id = "";
                    var nombre = "";
                    var apPat = "";
                    var apMat = "";
                    var pass = "";
                    // alert('me active');

                    // Obtenemos todos los valores contenidos en los <td> de la fila
                    // seleccionada
                    $(this).parents("tr").find(".numero").each(function() {
                        id += $(this).html();
                    });
                    $(this).parents("tr").find(".nombre").each(function() {
                        nombre += $(this).html();
                    });
                    $(this).parents("tr").find(".apPat").each(function() {
                        apPat += $(this).html();
                    });
                    $(this).parents("tr").find(".apMat").each(function() {
                        apMat += $(this).html();
                    });
                    // $(this).parents("tr").find(".pass").each(function() {
                    //     pass += $(this).html();
                    // });
                    // console.log(id);
                    // alert(nombre);
                    location.href="EliminarAdministrador.php?id="+id+"&nombre="+nombre+"&apPat="+apPat+"&apMat="+apMat;
                });
            });
        </script>
        <title>Document</title>
    </head>
    <body>
        <div class="imgSuperior">
            <img src="https://www.colegiowilliams.edu.mx/hs-fs/hubfs/Web/colegio-williams-logo.png?width=792&name=colegio-williams-logo.png" alt="Imagen Superior"/>
        </div>
        <div class="barraNavegacion">
            <div class="logotipo">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Materias <i class="fas fa-angle-down"></i></a>
                        <ul class="subMenu">
                            <li><a href="ConsultarMateria.php">Consultar</a></li>
                            <li><a href="CrearMateria.php">Crear</a></li>
                        </ul>
                    </li> 
                    <li><a href="#">Maestros <i class="fas fa-angle-down"></i></a>
                        <ul class="subMenu">
                            <li><a href="ConsultarMaestros.php">Consultar</a></li>
                            <li><a href="CrearMaestro.php">Crear</a></li>
                        </ul>
                    </li> 
                    <li><a href="#">Alumnos <i class="fas fa-angle-down"></i></a>
                        <ul class="subMenu">
                            <li><a href="#">Consultar</a></li>
                            <li><a href="#">Crear</a></li>
                        </ul>
                    </li> 
                    <li><a href="#">Administradores <i class="fas fa-angle-down"></i></a>
                        <ul class="subMenu">
                            <li><a href="ConsultarAdministradores.php">Consultar</a></li>
                            <li><a href="CrearAdministrador.php">Crear</a></li>
                        </ul>
                    </li> 
                    <li><a href="#">Generaciones <i class="fas fa-angle-down"></i></a>
                        <ul class="subMenu">
                            <li><a href="#">Consultar</a></li>
                            <li><a href="#">Crear</a></li>
                        </ul>
                    </li> 
                    <li><a href="#">Grupos <i class="fas fa-angle-down"></i></a>
                        <ul class="subMenu">
                            <li><a href="#">Consultar</a></li>
                            <li><a href="#">Crear</a></li>
                        </ul>
                    </li> 
                    <li><a href="#">Clases <i class="fas fa-angle-down"></i></a>
                        <ul class="subMenu">
                            <li><a href="#">Consultar</a></li>
                            <li><a href="#">Crear</a></li>
                        </ul>
                    </li> 
                    <li><a href="#">Manuel de Jesus Hernandez Zavala<i class="fas fa-angle-down"></i></a>
                        <ul class="subMenu">
                            <li><a href="alumnoAjustes.php">Configuracion</a></li>
                            <li><a href="#">Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>    
        <div class="contenedorPrincipal">
<?php            
        }
        public function __destruct(){
?>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {

                $('#example').DataTable();
            } );
        </script>
    </body>
    </html>
<?php   
        }
    }
?>