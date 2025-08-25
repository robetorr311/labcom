<?php include('header.php'); ?>
   <div class="container">
      <div class="row dashboard">
         <div class="col">
            <form id="register" name="register" accept-charset="UTF-8">
               <div class="row justify-content-center">
                  <div class="col-md-8 text-center margin-forms">
                     <div class="card">
                        <div class="card-header">
                           <h3> Formulario de Registro </h3>
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
                                 <label for="cedula">Cedula * :</label>
                                 <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Cedula">
                                 <div class="error_class"></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 text-center">
                                 <label for="direccion">Direccion:</label>
                                 <textarea id="direccion" name="direccion" class="form-control" placeholder="Direccion" ></textarea>
                                 <div class="error_class"></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 text-center">
                                 <label for="telefono">Telefono:</label>
                                 <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono"  onKeyPress="return AllowOnlyNumbers(event)">
                                 <div class="error_class"></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 text-center">
                                 <label for="email">Email*:</label>
                                 <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                 <div class="error_class"></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 text-center">
                                 <label for="password1">Contraseña* :</label>
                                    <div class="input-group mb-3">
                                       <input type="password"  id="password1" name="password1" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="Password">
                                       <span  id="icon_click" class="input-group-text"><i id="icon_show_hide_1" class="far fa-eye"></i></span>
                                    </div>
                                 <div class="error_class"></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 text-center">
                                 <label for="password2">Confirmar contraseña* :</label>
                                    <div class="input-group mb-3">
                                       <input type="password"  id="password2" name="password2" class="form-control" placeholder="Retype Password" aria-label="Retype Password" aria-describedby="Retype Password">
                                       <span  id="icon_click2" class="input-group-text"><i id="icon_show_hide_2" class="far fa-eye"></i></span>
                                    </div>
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
   </div><!-- /.container -->
<script src="assets/js/registro.js"></script>
<?php include('footer.php'); ?>