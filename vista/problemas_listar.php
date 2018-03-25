<html>
    
    <body>
     <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Buttons example</h3>
                            </div>
                            <div class="panel-body">

                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                        
                                        </tr>
                                    </thead>


                                    <tbody id="pro">
                                     
                                     
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->

                
   

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

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
        
        <script type="text/javascript">
           $(document).ready(function(){
               
               if($('#ocultar_id').val()=='2'||$('#ocultar_id').val()=='3'||$('#ocultar_id').val()=='29'){
              
                       var codID = $('#codID').val();
                $.post("../controllers/ProblemaList_1.php",
                    {
                        cod: codID
                    },
                    function(data, status){
                         $('#pro').html(data);
                    });
               }
               
        else{
                var codID = $('#codID').val();
                $.post("../controllers/problemas_list.php",
                    {
                        cod: codID
                    },
                    function(data, status){
                         $('#pro').html(data);
                    });
               }
               
               
                  var codID = $('#codID').val();
                $.post("../controllers/ProblemaList_1.php",
                    {
                        cod: codID
                    },
                    function(data, status){
                         $('#pro').html(data);
                    });
               
        });    
       </script> 

    </body>
</html>

