

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Mostrar <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Todos los Perifericos</a></li>
                                 <li class="divider"></li>
                                <li><a href="#">Perifericos Libres</a></li>
                                <li><a href="#">Perifericos Asignado</a></li>
                                <li class="divider"></li>
                          
                            </ul>
                        </div>
                      <h3 class="panel-title">Perifericos</h3>
                    </div>
                </div>
                            </div>
                            <div class="panel-body">

                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Styker Activo</th>
                                            <th>Fecha de compra</th>
                                        </tr>
                                    </thead>


                                    <tbody id="perifericos">                                                                          
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->



        <script src="assets/js/jquery.app.js"></script>

     
        <script>
        $(document).ready(function(){              
                $.post("../controllers/PerifericoList.php",
                    function(data, status){
                         $('#perifericos').html(data);
                    });

             });
        </script>

    </body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>