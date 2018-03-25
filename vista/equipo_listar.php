<!DOCTYPE html>
<html>

    <!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:42 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!--<link rel="shortcut icon" href="assets/images/favicon_1.ico">-->
        <link rel="shortcut icon" href="http://pescadero.com.co/_images/logoicon.png">


        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>


                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Lista de equipo</h3>
                            </div>
                            <div class="panel-body" id="equipoTabla">

                            </div>
                        </div>
                    </div>

                </div>



     <script type="text/javascript">
            $(document).ready(function () {
               
                $.ajax({
                    type: 'post',
                    url: '../controllers/PantallaList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#pantallas').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });


                $.ajax({
                    type: 'post',
                    url: '../controllers/TecladosFreeList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#teclados').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

                $.ajax({
                    type: 'post',
                    url: '../controllers/MouseFreeList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#mouses').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

                $.ajax({
                    type: 'post',
                    url: '../controllers/ImpresorasFreeList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#impresoras').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

                $.ajax({
                    type: 'post',
                    url: '../controllers/ImpresorasFreeList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#impresoras').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

                $.ajax({
                    type: 'post',
                    url: '../controllers/CamarasFreeList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#camaras').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

            });



        </script>


        
        <script type="text/javascript" src="assets/js/equipoTabla.js"></script> <!-- /.usu para-body -->

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable({ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true});
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
            });
            TableManageButtons.init();
        </script>


    </body>

    <!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>
