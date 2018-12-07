

@extends('layouts.layout_menu')

@section('contenido')

  <!-- Perfil como Freelance -->

  <h1>Configuración</h1> 
                
        <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Editar cuenta </strong>
                        </div> 
                           <br>
                        <div class="card-block">

                            <form class="needs-validation" enctype="multipart/form-data">
               
                <!-- NOMBRE COMPLETO -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Nombre Completo </label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nombre completo" required name="userName">
                            <span class="input-group-addon addon-primary"><i class="la la-user"></i></span>
                        </div>
                    </div>
                </div>
              

               
                <!-- EMAIL -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Correo electrónico</label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Correo electrónico" required name="correo">
                            <span class="input-group-addon addon-primary"><i class="la la-at"></i></span>
                        </div>
                    </div>
                </div>
                              
                 <!-- CONTRASEÑA ACTUAL -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Contraseña actual </label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Contraseña" required name="password">
                            <span class="input-group-addon addon-orange"><i class="la la-edit"></i></span>
                        </div>
                    </div>
                </div>
                              
                              
                <!-- NUEVA CONTRASEÑA -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Nueva contraseña </label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Nueva contraseña" required name="newPassword">
                            <span class="input-group-addon addon-primary"><i class="la la-edit"></i></span>
                        </div>
                    </div>
                </div>
              
                              
                 <!-- RE-ECRIBIR NUEVA CONTRASEÑA -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Re-escribir nueva contraseña </label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Re-escribir nueva contraseña" required name="newPasswordConfirm">
                            <span class="input-group-addon addon-primary"><i class="la la-edit"></i></span>
                        </div>
                    </div>
                </div>
              
              
                


                
                <div class="text-center">
                    <button class="btn btn-gradient-02" type="submit" name="actualizar">Actualizar datos</button>                    
                </div>
            </form>
                                                               
                                <br>                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection