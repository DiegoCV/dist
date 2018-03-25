$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '/dist/cargo/listar'
  })
  .done(function(listas_rep){
    $('#Cargo_id').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listashjgfgh_rep')
  })


})