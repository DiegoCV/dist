<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:42 GMT -->





<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Buttons example</h3>
                            </div>
                            <div class="panel-body" id="calidad">

                                
<!--                               
<!--                                    <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>-->
                                    <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate"><ul class="pagination">
                                        </ul></div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>






           




        <script type="text/javascript" src="assets/js/funciones.js"></script> 


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
        
        <script>
         $(document).ready(function () {
                $.ajax({
                    type: 'post',
                    url: '../controllers/CalidadList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#calidad').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });
                        });
        </script>
            



<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>