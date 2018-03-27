//ESTE CARGA TODOS LOS PROBLEMAS SIN NINGUNA RESTRICCCION
  $(document).ready(function () {
                  listarAllProblema();  
});

//CARGA TODAS LAS SOLICITUDES
  $('#allP').click(function() {
      listarAllProblema();
  });
//CARGA TODAS LAS SOLICITUDES PENDIENtes
  $('#penP').click(function() {
      listarPendientesProblema();
  });
  //CARGA TODAS LAS SOLICITUDES con solucion asignada
  $('#cerP').click(function() {
      listarSolucionadosProblema();
  });

  function listarAllProblema() {
      $.post("/dist/problema/listar",
                    function (data, status) {
                        $('#pro').html(data);
                    });
  }

  function listarPendientesProblema() {
      $.post("/dist/problema/listarPendientes",
                    function (data, status) {
                        $('#pro').html(data);
                    });
  }

  function listarSolucionadosProblema(){
    $.post("/dist/problema/listarSolucionados",
                    function (data, status) {
                        $('#pro').html(data);
                    });
  }
