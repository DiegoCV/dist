<html>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                                 <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right">

                        </div>
                       <h3 class="panel-title">Personal</h3>
                    </div>
                </div>
                            </div>
                            <div class="panel-body">

                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <!--<th hidden="true">id oculto</th>-->
                                            <th style="width: 20.011px;">Id</th>
                                            <th style="width: 20.011px;">NombreS</th>
                                            <th style="width: 20.011px;">Cargo</th>
                                            <th style="width: 20.011px;">Correo</th>
                                            <th style="width: 20.011px;">modificar</th>
                                        </tr>
                                    </thead>


                                    <tbody id="usuarios" >
                                       
                                      
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->


       


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
           




    


 
       
    
                  <!--<script type="text/javascript" src="assets/js/tipo_pantalla.js"></script>--> 
        <script type="text/javascript" src="assets/js/funciones.js"></script> <!-- /.usu para-body -->


        <script src="assets/js/jquery.app.js"></script>

       <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>
        
<!--        <script>
            $(document).ready(function () {
                $.ajax({
                    type: 'post',
                    url: '../controllers/UsuarioList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#usuarios').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });
                        });
        </script>
        -->
        
         <script>
         $(document).ready(function () {
                $.ajax({
                    type: 'post',
                    url: '../controllers/UsuarioList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#usuarios').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });
                        });
        </script>

</html>