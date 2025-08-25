$(document).ready( function() {
   $('#tabla_articulos').DataTable();
   $("#articulos").validate({
      rules: {
         nombre: "required",
         modelo: "required",
         marca:"required",
         tipo_articulo: "required"
      },
      messages: {
         nombre: "Debe indicar su nombre del articulo",
         modelo: "Debe indicar el modelo del articulo",            
         telefono:"Debe seleccionar una marca",
         tipo_articulo:"Debe seleccionar el tipo de articulo"
      },
      errorClass: "error_validate",
      inputContainer: "error_class",
      submitHandler: function(response){
         let nombre = $("#nombre").val();
         let modelo = $("#modelo").val();
         let marca = $("#marca").val();
         let tipo_articulo = $("#tipo_articulo").val();
            $.ajax({
               url:  "guardararticulo.php",
               type: 'POST',
               async: true,
               data:{
                  nombre : nombre,
                  modelo : modelo,
                  marca : marca,
                  tipo_articulo : tipo_articulo
               },
               success: function(response) {
                  let status=parseInt(response.status);
                  switch(status){
                     case 200:
                        Swal.fire({
                           title: "Articulo Guardado Correctamente!",
                           text: response.swal,
                           icon: "success"
                        }).then((result) => {
                           location.href="articulos.php"
                        });
                     break;
                     case 500:
                        Swal.fire({
                           title: "Fail!",
                           text: response.swal,
                           icon: "error"
                        }).then((result) => {
                           location.reload();
                        });
                     break;
                     default:
                     break;
                  } 
               }
         });
      }
   });
});
