

@extends('layouts.layout_menu')

@section('contenido')

  <!-- Perfil como Freelance -->

  <h1>Mi Perfil como Cliente</h1> 
  <a href="/editarPerfil"> <button class="btn btn-success" type="submit" name="registro"> Editar </button> </a>
                
        <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Nombre: - nombre completo - </strong>
                        </div> 
                           <br>
                        <div class="card-block">

                           
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Imagen </label>                                    
                                </div>
                                
                                <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Breve descripción</label>                                 
                                </div>
                                
                                <br>
                                 <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> País: México </label>                                    
                                </div>
                                
                                 <br>
                                 <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Proyectos publicados:  </label>
                                </div>
                                                               
                                <br>                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- SOBRE MÍ -->
<br><br><br>
                
        <div class="page-body">            
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Sobre mí </strong>
                        </div> 
                           
                        <div class="card-block">                           
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Descripción sobre mí </label>                                    
                                </div>                                                                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection