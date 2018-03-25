

<!DOCTYPE html>
<html>

 

                   <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Registro de Periferico</h3></div>
                                    <div class="panel-body">
                                        
                                        <form class="form-horizontal" role="form">   

                                         
                                            
                                            
                                                 <div class="form-group">
                                                <label class="col-sm-2 control-label">Tipo de Periferico</label>
                                                <div class="col-sm-10">
                  <select  required id="tipo_periferico" name="tipo_periferico" class="form-control" onChange="pantallaOnChange(this)">
          </select>                                   
                                           <!--<select required class="form-control" onChange="pantallaOnChange(this)">-->
                                                    
                                           
                                                </div>
                                            </div>
                                       

      <div id="nPantalla" style="display:none; ">
          
                     <div class="form-group">
                                                <label class="col-sm-2 control-label">Tipo de Pantallas</label>
                                                <div class="col-sm-10">
                                              
                                                      <select   id="tipo_pantalla_id" name="tipo_pantalla" class="form-control" >
          </select> 
                                           
                                                </div>
                                            </div>
          
          
          <div class="form-group">
              <label class="col-md-2 control-label">Pulgadas</label>
              <div class="col-md-10">
                  <input id="pulgadas" name="pulgadas" type="text" class="form-control" required="">
              </div>
          </div>
          
          
          
      </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Marca</label>
                                                <div class="col-md-10">
                                                    <input id="marca" name="marca" type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                      
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Modelo</label>
                                                <div class="col-md-10">
                                                    <input id="modelo" name="modelo" type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Serial</label>
                                                <div class="col-md-10">
                                                    <input id="serial" name="serial" type="text" class="form-control" required="">
                                                </div>
                                            </div>    
                                
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Stiker Activo</label>
                                                <div class="col-md-10">
                                                    <input id="stiker_activo" name="stiker_activo" type="text" class="form-control" required="">
                                                </div>
                                            </div>                                    
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Fecha de compra</label>
                                                <div class="col-md-10">
<!--                                                    <div class="input-group">-->
<input id="fecha_compra" name="fecha_compra" type="date" class="form-control" placeholder="mm/dd/yyyy" >
                                   
<!--                                    <input type="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>-->
                                <!--</div>-->
                                                </div>
                                            </div>     
                                            
                                            
                                                                       
                                                                        
                                       <div class="form-group">                                    
                                <div class="col-sm-12" align="center">
                                    <button type="button" type="submit"  value="boton" name="btnMostrar" class="btn btn-info" >Registrar</button>
                                </div>
                            </div>       
                                     
                                            
                                        
                                         

                                       
                           
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->




        <!-- App js -->
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript" src="assets/js/tipo_periferico.js"></script> <!-- /.usu para-body -->
        <script type="text/javascript" src="assets/js/tipo_pantalla.js"></script> <!-- /.usu para-body -->

        <script>
                                                jQuery(document).ready(function () {

                                                    // Tags Input
                                                    jQuery('#tags').tagsInput({width: 'auto'});

                                                    // Form Toggles
                                                    jQuery('.toggle').toggles({on: true});

                                                    // Time Picker
                                                    jQuery('#timepicker').timepicker({defaultTIme: false});
                                                    jQuery('#timepicker2').timepicker({showMeridian: false});
                                                    jQuery('#timepicker3').timepicker({minuteStep: 15});

                                                    // Date Picker
                                                    jQuery('#datepicker').datepicker();
                                                    jQuery('#datepicker-inline').datepicker();
                                                    jQuery('#datepicker-multiple').datepicker({
                                                        numberOfMonths: 3,
                                                        showButtonPanel: true
                                                    });
                                                    //colorpicker start

                                                    $('.colorpicker-default').colorpicker({
                                                        format: 'hex'
                                                    });
                                                    $('.colorpicker-rgba').colorpicker();


                                                    //multiselect start

                                                    $('#my_multi_select1').multiSelect();
                                                    $('#my_multi_select2').multiSelect({
                                                        selectableOptgroup: true
                                                    });

                                                    $('#my_multi_select3').multiSelect({
                                                        selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                                                        selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                                                        afterInit: function (ms) {
                                                            var that = this,
                                                                    $selectableSearch = that.$selectableUl.prev(),
                                                                    $selectionSearch = that.$selectionUl.prev(),
                                                                    selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                                                                    selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                                                            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                                                                    .on('keydown', function (e) {
                                                                        if (e.which === 40) {
                                                                            that.$selectableUl.focus();
                                                                            return false;
                                                                        }
                                                                    });

                                                            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                                                                    .on('keydown', function (e) {
                                                                        if (e.which == 40) {
                                                                            that.$selectionUl.focus();
                                                                            return false;
                                                                        }
                                                                    });
                                                        },
                                                        afterSelect: function () {
                                                            this.qs1.cache();
                                                            this.qs2.cache();
                                                        },
                                                        afterDeselect: function () {
                                                            this.qs1.cache();
                                                            this.qs2.cache();
                                                        }
                                                    });



                                                    // Select2
                                                    jQuery(".select2").select2({
                                                        width: '100%'
                                                    });

                                                    //Bootstrap-TouchSpin
                                                    $(".vertical-spin").TouchSpin({
                                                        verticalbuttons: true,
                                                        verticalupclass: 'ion-plus-round',
                                                        verticaldownclass: 'ion-minus-round'
                                                    });
                                                    var vspinTrue = $(".vertical-spin").TouchSpin({
                                                        verticalbuttons: true
                                                    });
                                                    if (vspinTrue) {
                                                        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
                                                    }

                                                    $("input[name='demo1']").TouchSpin({
                                                        min: 0,
                                                        max: 100,
                                                        step: 0.1,
                                                        decimals: 2,
                                                        boostat: 5,
                                                        maxboostedstep: 10,
                                                        postfix: '%'
                                                    });
                                                    $("input[name='demo2']").TouchSpin({
                                                        min: -1000000000,
                                                        max: 1000000000,
                                                        stepinterval: 50,
                                                        maxboostedstep: 10000000,
                                                        prefix: '$'
                                                    });
                                                    $("input[name='demo3']").TouchSpin();
                                                    $("input[name='demo3_21']").TouchSpin({
                                                        initval: 40
                                                    });
                                                    $("input[name='demo3_22']").TouchSpin({
                                                        initval: 40
                                                    });

                                                    $("input[name='demo0']").TouchSpin({});
                                                });


        </script>
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

        <script>
//            $("#registrarPeriferico").submit(function (event) {
//                alert("Handler for .submit() called.");
//                event.preventDefault();
//            });
    function postRegistrarPerifericos(value){
        alert("Se registro con el siguiente id: "+value);
    }
        </script>
    </body>

    <!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>