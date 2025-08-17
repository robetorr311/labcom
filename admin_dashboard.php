<?php include('header.php'); 
if($_SESSION['logat'] == 1 && $_SESSION['user']['id_tipo'] == 1){
    //continue;
}else{
    header('Location: log_out.php');
}
?>
  <div class="login-screen" id="loginScreen">
    <img src="labcom.jpg" alt="LABCOM Logo grande">
    <div class="container py-5 d-none" id="dashboard">
      <h2 class="text-center mb-4">Ingreso al Sistema </h2>
        <!-- Formulario de ingreso -->
      <div class="card mb-4 form-card">
        <div class="card-body">
          <h1>DASHBOARD ADMIN</h1>
        </div>
      </div>
    </div>
  </div>
<?php include('footer.php'); ?>