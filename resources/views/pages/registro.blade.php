<!-- FORM para el registro de una cuenta -->

@extends('layout_registro')
  
@section('registro')
  <div class="widget has-shadow">
        <div class="widget-header bordered no-actions d-flex align-items-center">
            <h4>Registrar cuenta </h4>
        </div>
        <div class="widget-body">
            <form class="needs-validation" enctype="multipart/form-data">
               

                <!-- NOMBRE COMPLETO -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nombre </label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" placeholder="Nombre completo" required name="nombre">
                    </div>
                </div>

               
                <!-- EMAIL -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Correo electrónico</label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Correo electrónico" required name="correo">
                            <span class="input-group-addon addon-orange"><i class="la la-at"></i></span>
                        </div>
                    </div>
                </div>
              
                <!-- CONTRASEÑA -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Contraseña</label>
                    <div class="col-lg-5">
                        <input type="password" class="form-control" placeholder="Ingrese la contraseña" required name="password">                       
                    </div>
                </div>

                <!-- PAIS -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">País</label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <span class="input-group-addon addon-primary">
                                <i class="la la-flag"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="País" name="pais">
                        </div>
                    </div>
                </div>
               <!-- begin-->
              
              
              
              
              
              <!-- end-->

                
                <div class="text-center">
                    <button class="btn btn-gradient-02" type="submit" name="registro">Registrarse!</button>
                    <button class="btn btn-shadow" type="reset">Borrar</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Form -->

@endsection