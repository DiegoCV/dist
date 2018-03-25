
<!DOCTYPE html>
<html>




                <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Registrar Equipo</h3></div>
                                    <div class="panel-body">
                                        
                                        <form class="form-horizontal" role="form">   

                                         
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Empleado</label>
                                                <div class="col-sm-10">
                                                                                            <select  required id="Cargo_id" name="Cargo_id" class="form-control">
          </select>
                                           
                                                </div>
                                             </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Tipo de Equipo</label>
                                                <div class="col-sm-10">
                                           
                                            <select  required id="tipo_equipo" name="tipo_equipo" class="form-control" onChange="pantallaOnChange(this)">
          </select>
                                                </div>
                                            </div>
                                            
                                              
                                            
                                            
                   <div id="nPantalla" style="display:none; ">
          
                    <div class="form-group">
                                                <label class="col-sm-2 control-label">Serial Equipos</label>
                                                <div class="col-sm-10">
                                                          <select  required id="tipo_equipo" name="tipo_equipo" class="form-control">
          </select>
                                           
                                                </div>
                                            </div>
          
          
       
          
          
          
      </div>   
                                            
            <div id="nPantalla1" style="display:none; ">
              
                   <div class="form-group">
                                                <label class="col-sm-2 control-label">Listar Teclado</label>
                                                <div class="col-sm-10">
                                                        <select required class="form-control" id="teclados">                                                     
                                                       
                                                    </select>
                                           
                                                </div>
                                            </div>
                                       
                                            
                                                 <div class="form-group">
                                                <label class="col-sm-2 control-label">Listar Mouse</label>
                                                <div class="col-sm-10">
                                                 <select required class="form-control" id="mouses">
                                                                                                       
                                                    </select>
                                           
                                                </div>
                                            </div>
                                       
          
                   
                                            
                                            
          
      </div>
                                            
                   <div id="nPantalla2" style="display:none; ">
          
                     <div class="form-group">
                                                <label class="col-sm-2 control-label">Tipo de Pantallas</label>
                                                <div class="col-sm-10">
                                                 
                                       <select   id="tipo_pantalla_id" name="tipo_pantalla" class="form-control" onChange="listarPantallas(this)">
          </select> 
                                                </div>
                                            </div>
          
          
         <div class="form-group">
                                                <label class="col-sm-2 control-label">seriales de Pantallas</label>
                                                <div class="col-sm-10">
                                                   <select required class="form-control" id="pantallas" name="pantalla">                                                                                                           

                                            </select>
                                           
                                                </div>
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

       

            </div>
            <!-- end container -->

        </div>
        <!-- end wrapper -->



         jQuery  
        <script src="assets/js/jquery.min.js"></script>
        
                
<!--             <script>
             
  function pantallaOnChange(sel) {
    
  
           if (sel.value=="1"){
  
 divT=document.getElementById("nPantalla");
           divT.style.display = "";
 
    divT1 = document.getElementById("nPantalla1");
           divT1.style.display = "none";
           
           divT2 = document.getElementById("nPantalla2");
           divT2.style.display = "none";
      }
  
      if (sel.value=="2"){

 divT = document.getElementById("nPantalla");
           divT.style.display = "";
       
divT1 = document.getElementById("nPantalla1");
           divT1.style.display = "";
       
divT2 = document.getElementById("nPantalla2");
           divT2.style.display = "none";
      }
//      
   
      
        if (sel.value=="3"){

 divT = document.getElementById("nPantalla");
           divT.style.display = "";
       
divT1 = document.getElementById("nPantalla1");
           divT1.style.display = "";
       
divT2 = document.getElementById("nPantalla2");
           divT2.style.display = "";
      }
      
       if(sel.value==""){
   divT = document.getElementById("nPantalla");
           divT.style.display = "none";
       
divT1 = document.getElementById("nPantalla1");
           divT1.style.display = "none";
       
divT2 = document.getElementById("nPantalla2");
           divT2.style.display = "none";
      }
      
       if (sel.value=="4"){
   
 divT=document.getElementById("nPantalla");
           divT.style.display = "";
 
    divT1 = document.getElementById("nPantalla1");
           divT1.style.display = "none";
           
           divT2 = document.getElementById("nPantalla2");
           divT2.style.display = "none";
      }
}


 

    </script>-->
        
 <script>    
    function pantallaOnChange(sel) {
    
  
           if (sel.value=="1"){
  
 divT=document.getElementById("nPantalla");
           divT.style.display = "";
 
    divT1 = document.getElementById("nPantalla1");
           divT1.style.display = "none";
           
           divT2 = document.getElementById("nPantalla2");
           divT2.style.display = "none";
           
           
           
             $.ajax({
                    type: 'post',
                    url: '../controllers/EquipoListByTipo_equipo.php',
                    data:$('#tipo_equipo').val()
                })
                        .done(function (data,listas_rep) {
                            // alert(listas_rep);
                            $('#impresoras').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });
      }
  
      if (sel.value=="2"){

 divT = document.getElementById("nPantalla");
           divT.style.display = "";
       
divT1 = document.getElementById("nPantalla1");
           divT1.style.display = "";
       
divT2 = document.getElementById("nPantalla2");
           divT2.style.display = "none";
      }
//      
   
      
        if (sel.value=="3"){

 divT = document.getElementById("nPantalla");
           divT.style.display = "";
       
divT1 = document.getElementById("nPantalla1");
           divT1.style.display = "";
       
divT2 = document.getElementById("nPantalla2");
           divT2.style.display = "";
      }
      
       if(sel.value==""){
   divT = document.getElementById("nPantalla");
           divT.style.display = "none";
       
divT1 = document.getElementById("nPantalla1");
           divT1.style.display = "none";
       
divT2 = document.getElementById("nPantalla2");
           divT2.style.display = "none";
      }
      
       if (sel.value=="4"){
   
 divT=document.getElementById("nPantalla");
           divT.style.display = "";
 
    divT1 = document.getElementById("nPantalla1");
           divT1.style.display = "none";
           
           divT2 = document.getElementById("nPantalla2");
           divT2.style.display = "none";
      }
}


 

    </script>
    
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
    
      <script type="text/javascript" src="assets/js/index.js"></script>  
                 <script type="text/javascript" src="assets/js/tipo_equipo.js"></script> 
                  <script type="text/javascript" src="assets/js/tipo_pantalla.js"></script>   
        
  
       
          

<!--    </body>-->

<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>