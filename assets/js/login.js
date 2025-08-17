$(document).ready( function() {
    $("#sent_message").hide();
      $("#login").validate({
          rules: {
              email: {
                required: true,
                email: true,
              },
              tipo_usuario: "required",
              password:"required"
          },
          messages: {
            email: "Debes ingresar tu email afiliado a este sitio",
            email: {
              required: "Debes ingresar tu email afiliado a este sitio",
              email: "El email no es valido",
            },
            tipo_usuario:"Debes selecciona el tipo de usuario",
            password:"La contraseña es requerida"
          },
          errorClass: "error_validate",
          inputContainer: "error_class",
      });    
});