<?php
include_once substr(getcwd(), 0, 26) . '/core/Way.php';
?>

<?php
//session_start();
if (!isset($_SESSION['id_usuario']) || $_SESSION['id_usuario'] == null || $_SESSION['id_usuario'] == "") {
    echo'<script type="text/javascript">
                alert("Inicio de Sesion Requerido");
                window.location="../"
                </script>';
}

$usuario = $_SESSION['id_usuario'];
$cargo = $_SESSION['cargo_id'];
$nombre = $_SESSION['nombre_usuario'];
$correo = $_SESSION['Correo'];
//var_dump( $_SESSION['id_usuario'],$_SESSION['cargo_id']);
//var_dump($this->datos[0][1]);
session_destroy();
?>
<!DOCTYPE html>
<html>

    <!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:42 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href=<?php Way::ruta('assets/images/favicon_1.ico') ?>

              <title>Soporte Equipos</title>

        <!-- DataTables -->

        <link href=<?php Way::ruta('assets/plugins/datatables/jquery.dataTables.min.css') ?> rel="stylesheet" type="text/css" />

        <link href=<?php Way::ruta('assets/plugins/datatables/buttons.bootstrap.min.css') ?>  rel="stylesheet" type="text/css" />
        <link href=<?php Way::ruta('assets/plugins/datatables/fixedHeader.bootstrap.min.css') ?>  rel="stylesheet" type="text/css" />
        <link href=<?php Way::ruta('assets/plugins/datatables/responsive.bootstrap.min.css') ?>  rel="stylesheet" type="text/css" />
        <link href=<?php Way::ruta('assets/plugins/datatables/scroller.bootstrap.min.css') ?>  rel="stylesheet" type="text/css" />

        <link href=<?php Way::ruta('assets/css/bootstrap.min.css') ?>  rel="stylesheet" type="text/css">
        <link href=<?php Way::ruta('assets/css/core.css') ?>  rel="stylesheet" type="text/css">
        <link href=<?php Way::ruta('assets/css/icons.css') ?>  rel="stylesheet" type="text/css">
        <link href=<?php Way::ruta('assets/css/components.css') ?>  rel="stylesheet" type="text/css">
        <link href=<?php Way::ruta('assets/css/pages.css') ?>  rel="stylesheet" type="text/css">
        <link href=<?php Way::ruta('assets/css/menu.css') ?>  rel="stylesheet" type="text/css">
        <link href=<?php Way::ruta('assets/css/responsive.css') ?>  rel="stylesheet" type="text/css">
        <script src=<?php Way::ruta('assets/js/modernizr.min.js') ?>></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>

        <header id="topnav">


            <!-- $var = 'header_Adm.php';
               echo include $var;
             
            // echo "imr ".$cargo;-->

            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">


                        <a href="formPrincipal.php" class="logo" alt="Pescadero" title="Pescadero" > <img src=<?php Way::ruta('assets/images/logo2.png') ?> alt="Pescadero" title="Pescadero " width='25' height='25'><span>   Pescadero </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form class="navbar-left app-search pull-left hidden-xs">
                                    <label style="color: white" ><?php echo $nombre ?></label>
                                    <input type="hidden" id="ocultar_id" value="<?php echo $cargo ?>" />

                                </form>
                            </li>


                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <img src=<?php Way::ruta('assets/images/users/avatar-1.jpg') ?> alt="user-img" class="img-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu">

                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>

                                    <li><a href="/dist/"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li>
                                <a href="home.php" ><i class="md md-terrain "></i><span>  Inicio  </span> </a>

                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="md md-palette "></i><span>  Registrar  </span> </a>
                                <ul class="submenu">
                                    <li><a style="cursor: pointer  " data-toggle="modal" data-target="#con-close-modal">Registrar Solicitud</a></li>
                                    <li id="ocultar_0" style="display: none" ><a style="cursor: pointer  " data-toggle="modal" data-target="#modal-mantenimiento">Registrar Mantenimiento</a></li>


                                </ul>
                            </li>




                            <li  id="ocultar" style="display: none" class="has-submenu">
                                <a href="#"><i class="md md-palette "></i><span>  Equipos  </span> </a>
                                <ul class="submenu">
                                    <li><a onclick="FormRegistrarPeriferico();">Registrar Periferico</a></li>
                                    <li><a onclick="FormRegistrarEquipo();">Registrar Equipo</a></li>
                                    <li><a onclick="periferico_listar();">Listar Periferico</a></li>
                                    <li><a onclick="equipo_listar();">Listar Equipo</a></li>
                                    <li><a onclick="FormRegistrarCalendario();">Calendario Mantenimientos</a></li>
                                    <!--                                    <li><a href="periferico_listar.php">Listar Periferico</a></li>
                                                                        <li><a href="equipo_listar.php">Listar Equipo</a></li>-->

                                </ul>
                            </li>

                            <li id="ocultar_1" style="display: none"  class="has-submenu">
                                <a onclick="ListarPersonal();"><i class="md md-terrain "></i><span> Personal </span> </a>

                            </li>


                            <li id="ocultar_2" style="display: none"  >
                                <a onclick="calidad_Listar();" ><i class="md md-terrain "></i><span>  Calidad  </span> </a>

                            </li>


                        </ul>
                        <!-- End navigation menu  -->
                    </div>



                </div>
            </div>





            <script>
                
                
                $(document).ready(function () {
                    //       alert($('#ocultar_id').val());
//
//
//                    if ($('#ocultar_id').val() == '2') {
//
//                        document.getElementById('ocultar').style.display = "none"; // oculta equipos
//                        document.getElementById('ocultar_0').style.display = "none"; //oculta registrar mantenimiento
//                        document.getElementById('ocultar_1').style.display = ""; //oculta registrar personal
//                        document.getElementById('ocultar_2').style.display = ""; //oculta registrar calidad
//                    }
//                    if ($('#ocultar_id').val() == '3') {
//
//                        document.getElementById('ocultar').style.display = ""; // oculta equipos
//                        document.getElementById('ocultar_0').style.display = ""; //oculta registrar mantenimiento
//                        document.getElementById('ocultar_1').style.display = "none"; //oculta registrar personal
//                        document.getElementById('ocultar_2').style.display = "none"; //oculta registrar calidad
//                    }
//                    if ($('#ocultar_id').val() == '29') {
//
//
////
//                        document.getElementById('ocultar').style.display = ""; // oculta equipos
//                        document.getElementById('ocultar_0').style.display = ""; //oculta registrar mantenimiento
//                        document.getElementById('ocultar_1').style.display = ""; //oculta registrar personal
//                        document.getElementById('ocultar_2').style.display = ""; //oculta registrar calidad
//                        alert("HP");
//                    }
                    //    else{
                    //      
//                            document.getElementById('ocultar').style.display= "none"; 
//                            document.getElementById('ocultar_0').style.display= "none"; 
//                            document.getElementById('ocultar_1').style.display= "none"; 
//                            document.getElementById('ocultar_2').style.display= "none"; 
                    //    }

                });
            </script>

        </header>

        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Registrar Solicitud</h4>
                    </div>
                    <form action="../controllers/ProblemaInsert.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="problema" rows="5"></textarea>                                                                         
                                    <input type="hidden" name="idUsuario" value="<?php echo $usuario ?>" >                                                        
                                    <input type="hidden" name="cargoUsuario" value="<?php echo $cargo ?>" >
                                    <input type="hidden" name="nombreUsuario" value="<?php echo $nombre ?>" >
                                </div>                                                  
                            </div>
                        </div>                                            
                        <div class="fileupload btn btn-purple waves-effect waves-light">
                            <span><i class="ion-upload m-r-5"></i>Upload</span>
                            <input type="file" name="imagen" class="upload">

                        </div>
                        <br>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit"  class="btn btn-info waves-effect waves-light">Registrar Solicitud</button>
                        </div>
                    </form>
                </div>                                    
            </div>
        </div><!-- /.modal -->


        <div id="modal-mantenimiento" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Registrar Mantenimiento</h4>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Equipo</label>
                            <select required class="form-control" id="field-3">
                                <option value="">Seleccione</option>
                                <option value="1">Comercial</option>
                                <option value="2">Servidor</option>
                                <option value="3">Despachos</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">fecha</label>
                            <input type="date" class="form-control" id="field-3" placeholder="Address">
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">Observacion</label>
                            <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px">                                                        </textarea>
                        </div>
                    </div>

                    <hr>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info waves-effect waves-light">Registrar Solicitud</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->




        <div class="wrapper">
            <div class="container">


                <div id="mostrarcontenido"  class="col-lg-12">



                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="btn-group pull-right">

                                                <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Mostrar <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#" id="allP">Todos las Solicitudes</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#" id="penP">Solicitudes Pendientes</a></li>
                                                    <li><a href="#" id="cerP">Solicitudes Cerradas</a></li>
                                                    <li class="divider"></li>

                                                </ul>
                                            </div>
                                            <h3 class="panel-title">Solicitudes</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <!--                            <div class="panel-heading">
                                                                            <h3 class="panel-title">Buttons example</h3>
                                                                        </div>-->
                                            <div class="panel-body" id="pro">



                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- End Row -->                 






                            </div>
                        </div>

                    </div> 


                </div>

                <div id="modal-solucion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Registrar Solucion</h4>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Address</label>
                                    <input type="text" class="form-control" id="field-3" placeholder="Address">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group no-margin">
                                    <label for="field-7" class="control-label">Personal Info</label>
                                    <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px">                                                        </textarea>
                                </div>
                            </div>

                            <div class="fileupload btn btn-purple waves-effect waves-light">
                                <span><i class="ion-upload m-r-5"></i>Upload</span>
                                <input type="file" class="upload">
                            </div>
                            <br>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-info waves-effect waves-light">Registrar Solicitud</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->


                <?php include "footer.php"; ?>  

            </div>
            <!-- end container -->

        </div>


        <!-- end Modal -->




                  <!--<script type="text/javascript" src="assets/js/tipo_pantalla.js"></script>--> 
        <!-- 
            LE DOCUMENTE ESTA MARICADA

            <script type="text/javascript" src="assets/js/funciones.js"></script> --> 


        <!-- jQuery  -->
        <script src=<?php Way::ruta('assets/js/jquery.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/js/bootstrap.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/js/detect.js') ?>></script>
        <script src=<?php Way::ruta('assets/js/fastclick.js') ?>></script>
        <script src=<?php Way::ruta('assets/js/jquery.blockUI.js') ?>></script>
        <script src=<?php Way::ruta('assets/js/waves.js') ?>></script>
        <script src=<?php Way::ruta('assets/js/wow.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/js/jquery.nicescroll.js') ?>></script>
        <script src=<?php Way::ruta('assets/js/jquery.scrollTo.min.js') ?>></script>

        <!-- Datatables-->
        <script src=<?php Way::ruta('assets/plugins/datatables/jquery.dataTables.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/dataTables.bootstrap.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/dataTables.buttons.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/buttons.bootstrap.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/jszip.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/pdfmake.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/vfs_fonts.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/buttons.html5.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/buttons.print.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/dataTables.fixedHeader.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/dataTables.keyTable.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/dataTables.responsive.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/responsive.bootstrap.min.js') ?>></script>
        <script src=<?php Way::ruta('assets/plugins/datatables/dataTables.scroller.min.js') ?>></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

        <script src="assets/js/jquery.app.js"></script>
        <script type="text/javascript" >
           //AQUI AGREGUE ESTO RECORDAR QUITARLO
                        document.getElementById('ocultar').style.display = ""; // oculta equipos
                        document.getElementById('ocultar_0').style.display = ""; //oculta registrar mantenimiento
                        document.getElementById('ocultar_1').style.display = ""; //oculta registrar personal
                        document.getElementById('ocultar_2').style.display = ""; //oculta registrar calidad
               
        </script>

        <!-- ESTA COSA LISTA TODOS LOS EQUIPOS POR USUARIO
                <script type="text/javascript">
                    $(document).ready(function () {
        
                        if ($('#ocultar_id').val() == '2' || $('#ocultar_id').val() == '3' || $('#ocultar_id').val() == '29') {
        
                            var codID = $('#codID').val();
                            $.post("/dist/problema/listar",
                                    {
                                        cod: codID
        
                                    },
                            function (data, status) {
                                $('#pro').html(data);
                            });
                        }
        
        
                        else {
                            var codID = $('#ocultar_id').val();
                            $.post("/dist/problema/listar",
                                    {
                                        cod: codID
        
                                    },
                            function (data, status) {
                                $('#pro').html(data);
                            });
                        }
        
                    });
                </script> 
        -->

        <script>

                function pantallaOnChange(sel) {

                    if (sel.value == "1") {

                        divT = document.getElementById("nPantalla");
                        divT.style.display = "";

                    } else {
                        divT = document.getElementById("nPantalla");
                        divT.style.display = "none";

                    }
                }
        </script>




        <!--                     
                          $.ajax({
                    url: './php/Login.php', //URL destino
                    data: data,
                    processData: false, //Evitamos que JQuery procese los datos, daría error
                    contentType: false, //No especificamos ningún tipo de dato
                    type: 'POST',
                    success: function (data) {
                        $('#resultlogin').html(data);
                    }
                })-->

    </body>
    <script type="text/javascript" src=<?php Way::ruta('assets/js/soporte.js') ?>></script>

    <!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>
