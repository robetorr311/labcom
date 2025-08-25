<?php 
include('header.php'); 
$select_marca = mysqli_query($conexion, "SELECT * FROM marca_equipo");
$select_tipo_articulo = mysqli_query($conexion, "SELECT * FROM tipo_articulo");
$select_articulos = mysqli_query($conexion, "SELECT * FROM articulo");
?>
   <div class="container">
      <div class="row dashboard">
         <div class="col">
            <form id="articulos" name="articulos" accept-charset="UTF-8">
               <div class="row justify-content-center">
                  <div class="col-md-8 text-center margin-forms">
                     <div class="card">
                        <div class="card-header">
                           <h3> Formulario de Articulos </h3>
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class="col-md-12 text-center">
                                 <label for="nombre">Nombre * :</label>
                                 <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                                 <div class="error_class"></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 text-center">
                                 <label for="modelo">Modelo * :</label>
                                 <textarea id="modelo" name="modelo" class="form-control" placeholder="Modelo" ></textarea>
                                 <div class="error_class"></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col text-center margin-forms">
                              <label for="marca">Marca * :</label>
                                 <select class="form-select"  id="marca" name="marca" aria-label="Default select example">
                                    <option value="">Seleccione la marca</option>
                    <?php
                    while($row_marca = mysqli_fetch_array($select_marca)){
                      echo "<option value=".$row_marca['id'].">".$row_marca['nombre']."</option>";
                    }
                    ?>
                                 </select>
                                 <div class="error_class"></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col text-center margin-forms">
                              <label for="tipo_articulo">Tipo de Articulo * :</label>
                                 <select class="form-select"  id="tipo_articulo" name="tipo_articulo" aria-label="Default select example">
                                    <option value="">Seleccione el tipo de articulo</option>
                    <?php
                    while($row_tipo_articulo = mysqli_fetch_array($select_tipo_articulo)){
                      echo "<option value=".$row_tipo_articulo['id'].">".$row_tipo_articulo['nombre']."</option>";
                    }
                    ?>
                                 </select>
                                 <div class="error_class"></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col text-center">
                                 <button type="submit" id="btn-register" name="register" value="" class="btn btn-light">Guardar</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <i>* = Obligatorio</i>
                  </div>
               </div>
            </form>   
         </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-4 form-card">
            <div class="card-body">
              <h4>Articulos</h4>
              <div class="table-responsive">
                <table id="tabla_articulos" class="display">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Tipo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     while($row_articulo = mysqli_fetch_array($select_articulos)){
                        $select_marca_equipo_id = mysqli_query($conexion, "SELECT * FROM marca_equipo WHERE id=".$row_articulo['id_marca']);
                        $tipo_articulo_id = mysqli_query($conexion, "SELECT * FROM tipo_articulo WHERE id=".$row_articulo['id_tipoarticulo']);
                        $row_marca = mysqli_fetch_array($select_marca_equipo_id);
                        $row_tipo_articulo = mysqli_fetch_array($tipo_articulo_id);
                        echo "<tr><td>".$row_articulo['id']."</td><td>".$row_articulo['nombre']."</td><td>".$row_marca['nombre']."</td><td>".$row_articulo['modelo']."</td><td>".$row_tipo_articulo['nombre']."</td><td></td></tr>";
                    }
                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Tipo</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div><!-- /.container -->
<script src="assets/js/articulos.js"></script>
<?php include('footer.php'); ?>