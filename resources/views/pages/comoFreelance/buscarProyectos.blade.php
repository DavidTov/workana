@extends('layouts.layout_menu')

@section('contenido')

<h1> Buscar proyectos </h1> 
<br>
<a href="/proyectosConMisHabilidades"> <button class="btn btn-success" type="submit" name="registro"> Proyectos con mis habilidades </button> </a> 
  
<br><br><br>
<div>
  <h4> <strong> Filtrar </strong> </h4>
  <div>
    
    <input type="checkbox" name="programacionWeb">
    <label for="programacion web"> Programación web</label>
    <br>
    <input type="checkbox">
    <label for="diseño web"> Diseño web </label>
    <br>
    <input type="checkbox">
    <label for="tiendas virtuales(ecommerce)"> Tiendas Virtuales (ecommerce) </label>
    <br>
    <input type="checkbox">
    <label for="wordpress"> Wordpress </label>
    <br>
    <input type="checkbox">
    <label for="programacion de apps"> Programación de apps Móviles</label>
    <br>
    <input type="checkbox">
    <label for="aplicaciones de escritorio"> Aplicaciones de escritorio </label>
  </div>
</div>  


  <div class="page-body">
      <br>
      <div class="row">
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <strong> Proyecto: - nombre proyecto - </strong>
                  </div> 
                     <br>
                  <div class="card-block">


                        <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Plazo </label>                                    
                          </div>

                          <br>
                        <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Peopuestas </label>                                 
                          </div>

                          <br>
                           <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Descripción </label>                                    
                          </div>

                           <br>
                           <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Categoría:  </label>
                          </div>

                            <br>
                           <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Pago: $MXN  </label>
                          </div>

                           <br>
                           <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Usuario: nombre cliente </label>
                          </div>
                          <br>   
                     <div class="form-group row">
                              <div class="col-sm-4"></div>
                              <a href="/realizarPropuesta"> <button class="btn btn-success" type="submit" name="registro"> Realizar propuesta </button> </a> 
                          </div>

                  </div>
              </div>
          </div>
      </div>
  </div>



@endsection