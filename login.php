<?php 
include('header.php');
$select_tipos_de_usuario = mysqli_query($conexion, "SELECT * FROM tipo_usuario");
$alert="";
if(isset($_POST['email'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $tipo = $_POST['tipo_usuario'];
  $select_user = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '".$email."' AND clave = '".hash('sha256', $password)."' AND id_tipo=".$tipo);
  $num_rows = mysqli_num_rows($select_user);
  if(!$num_rows == null){
    $row_user = mysqli_fetch_assoc($select_user);
      $_SESSION['logat'] = 1;
      $_SESSION['user'] = $row_user;
      if($row_user['id_tipo'] == 1){
        header("Location: admin_dashboard.php");
      }
      elseif($row_user['id_tipo'] == 2){
        header("Location: tecnico_dashboard.php");
      }
      else
      {
        header("Location: cliente_dashboard.php");
      }
    }
    else{
      $alert="Error! Contraseña, login o tipo de usuario incorrecto. Por favor intenda de nuevo.";
    }
  }
?>
<!-- Pantalla de login tipo intro -->
  <div class="login-screen" id="loginScreen">
    <img src="assets/imagenes/labcom.jpg" alt="LABCOM Logo grande">
      <div class="container py-5" id="dashboard">
        <h2 class="text-center mb-4">Ingreso al Sistema </h2>

        <!-- Formulario de ingreso -->
        <div class="card mb-4 form-card">
          <div class="card-body">
            <form id="login" method="post" action="login.php" accept-charset="UTF-8">
              <div class="row justify-content-center">
                <div class="col text-center margin-forms">
                  <label for="email">Email:</label>
                  <input type="email" id="email"  name="email" class="form-control" placeholder="Email">
                  <div class="error_class"></div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col text-center margin-forms">
                  <label for="password">Password</label>
                  <input type="password" id="password" class="form-control" name="password" placeholder="Password" />
                  <div class="error_class"></div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col text-center margin-forms">
                  <label for="tipo_usuario">Ingreso como:</label>
                  <select class="form-select"  id="tipo_usuario" name="tipo_usuario" aria-label="Default select example">
                    <option value="">Seleccione el tipo de usuario</option>
                    <?php
                    while($row_tipo = mysqli_fetch_array($select_tipos_de_usuario)){
                      echo "<option value=".$row_tipo['id'].">".$row_tipo['nombre']."</option>";
                    }
                    ?>
                  </select>
                  <div class="error_class"></div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                  <button type="submit" class="btn btn-light" >Entrar al sistema</button>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                </div>
                <div class="col-md-6 text-center">
                  <h5><a class="login-links" href="registro.php">No tienes cuenta? por favor registrese aqui.</a></h5>
                </div>

              </div>            
            </form>
            <?php
              if(!empty($alert)){
                echo '<div class="alert alert-danger"> <strong>Fail!</strong>'.$alert.'</div>';
              }
            ?>
          </div>
      </div>
    </div>
  </div>

  <script src="assets/js/login.js"></script>
<?php
    include('footer.php'); 
?>  
