$(document).ready( function() {
   $("#sent_message").hide();
   $("#telefono").inputmask('(999)-999-9999');
   $("#icon_click").click(function() 
   {
      var type = $( "#password1" ).attr( "type" );
      if(type=='password'){
         $("#password1").attr("type", "text");
         $("#icon_show_hide_1").removeClass("far fa-eye");
         $("#icon_show_hide_1").addClass("far fa-eye-slash");
      }
      else{
         $("#password1").attr("type", "password");
         $("#icon_show_hide_1").removeClass("far fa-eye-slash");
         $("#icon_show_hide_1").addClass("far fa-eye");
      }    
   });
   $("#icon_click2").click(function() 
   {
      var type = $( "#password2" ).attr( "type" );
      if(type=='password'){
         $("#password2").attr("type", "text");
         $("#icon_show_hide_2").removeClass("far fa-eye");
         $("#icon_show_hide_2").addClass("far fa-eye-slash");
      }
      else{
         $("#password2").attr("type", "password");
         $("#icon_show_hide_2").removeClass("far fa-eye-slash");
         $("#icon_show_hide_2").addClass("far fa-eye");
      }    
   });
   $("#register").validate({
      rules: {
         nombre: "required",
         cedula: "required",
         email: {
            required: true,
            email: true,
         },
         password1: {
            "required": true,
            "minlength": 8
         },
         password2: {
            "required": true,
            "minlength": 8,
            "equalTo": "#password1"
         },
         telefono:"required"
      },
      messages: {
         nombre: "Debe ingresar su nombre y apellido",
         cedula: "Debe ingresar la cedula",            
         email: {
               required: "Debes ingresar tu email",
               email: "El email no es valido",
            },
            password1: {
               required: "La contraseña es requerida",
               minlength: "Tu contraseña debe tener logitud de al menos 8 digitos",
               equalTo: "No coincide"
            },
            password2: {
               required: "La contraseña es requerida",
               minlength: "Tu contraseña debe tener logitud de al menos 8 digitos",
               equalTo: "No coincide"
            },
            telefono:"Debe ingresar el telefono"
      },
      errorClass: "error_validate",
      inputContainer: "error_class",
      submitHandler: function(response){
         let nombre = $("#nombre").val();
         let direccion = $("#direccion").val();
         let cedula = $("#cedula").val();
         let email = $("#email").val();
         let password = $("#password1").val();
         let telefono = $("#telefono").val();
         $("#sent_message").show();
            $.ajax({
               url:  "guardarregistro.php",
               type: 'POST',
               async: true,
               data:{
                  nombre : nombre,
                  direccion : direccion,
                  cedula : cedula,
                  email : email,
                  password : password,
                  telefono : telefono,
                  id_tipo : 3
               },
               success: function(response) {
                  let status=parseInt(response.status);
                  switch(status){
                     case 200:
                        Swal.fire({
                           title: "Registration was successful!",
                           text: response.swal,
                           icon: "success"
                        }).then((result) => {
                           location.href="login.php"
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
function AllowOnlyNumbers(event){
    var regex = new RegExp("^[0-9]*$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
}