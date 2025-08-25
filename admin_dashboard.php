<?php include('header.php'); 
if($_SESSION['logat'] == 1 && $_SESSION['user']['id_tipo'] == 1){
    //continue;
}else{
    header('Location: log_out.php');
}
?>
  <div class="dashboard" id="loginScreen">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4 form-card">
            <div class="card-body">
              <h4>SOLICITUDES PENDIENTES</h4>
              <div class="table-responsive">
                <table id="pendientes" class="display">
                  <thead>
                    <tr>
                      <th>Numero de Orden</th>
                      <th>Fecha</th>
                      <th>Solicitante</th>
                      <th>Tecnico</th>
                      <th>Equipo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>13211</td>
                      <td>2011-04-25</td>
                      <td>Edinburgh</td>
                      <td>Pedro Perez</td>
                      <td>2011-04-25</td>
                      <td></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Numero de Orden</th>
                      <th>Fecha</th>
                      <th>Solicitante</th>
                      <th>Tecnico</th>
                      <th>Equipo</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4 form-card">
            <div class="card-body">
              <h4>SOLICITUDES EN REVISION</h4>
              <div class="table-responsive">
                <table id="revision" class="display">
                  <thead>
                    <tr>
                      <th>Numero de Orden</th>
                      <th>Fecha</th>
                      <th>Solicitante</th>
                      <th>Tecnico</th>
                      <th>Equipo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>13211</td>
                      <td>2011-04-25</td>
                      <td>Edinburgh</td>
                      <td>Pedro Perez</td>
                      <td>2011-04-25</td>
                      <td></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Numero de Orden</th>
                      <th>Fecha</th>
                      <th>Solicitante</th>
                      <th>Tecnico</th>
                      <th>Equipo</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4 form-card">
            <div class="card-body">
              <h4>SOLICITUDES PROCESADAS</h4>
              <div class="table-responsive">
                <table id="procesados" class="display">
                  <thead>
                    <tr>
                      <th>Numero de Orden</th>
                      <th>Fecha</th>
                      <th>Solicitante</th>
                      <th>Tecnico</th>
                      <th>Equipo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>13211</td>
                      <td>2011-04-25</td>
                      <td>Edinburgh</td>
                      <td>Pedro Perez</td>
                      <td>2011-04-25</td>
                      <td></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Numero de Orden</th>
                      <th>Fecha</th>
                      <th>Solicitante</th>
                      <th>Tecnico</th>
                      <th>Equipo</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4 form-card">
            <div class="card-body">
              <h4>SOLICITUDES ENTREGADAS</h4>
            </div>
              <div class="table-responsive">
                <table id="entregadas" class="display">
                  <thead>
                    <tr>
                      <th>Numero de Orden</th>
                      <th>Fecha</th>
                      <th>Solicitante</th>
                      <th>Tecnico</th>
                      <th>Equipo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>13211</td>
                      <td>2011-04-25</td>
                      <td>Edinburgh</td>
                      <td>Pedro Perez</td>
                      <td>2011-04-25</td>
                      <td></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Numero de Orden</th>
                      <th>Fecha</th>
                      <th>Solicitante</th>
                      <th>Tecnico</th>
                      <th>Equipo</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
      <script src="assets/js/admin_dashboard.js"></script>
<?php include('footer.php'); ?>