
@extends('layouts.layout_menu')

@section('contenido')
  <h1>Mis proyectos como Cliente</h1>
                
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

                              <label for=""> Si el estado es "evaluando propuestas" aparece el botón de ver propuestas </label>
                              <br>
                            <a href="verPropuestas"> <button class="btn btn-success" type="submit" name="registro"> Ver propuestas </button> </a> 
                            <br>
                          sino aparece el nombre del freelance
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Usuario: - nombre del Freelance - </label>                                    
                                </div>
                                
                                <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Descripción del proyecto</label>
                                    <div class="col-sm-6">                                        
                                      <textarea name="descripcio" cols="30" rows="7" class="form-control">
                                        Descripción
                                      </textarea>
                                    </div>
                                </div>
                                
                                <br>
                                 <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Estado: - Evaluando propuestas, cancelado, en producción, etc - </label>                                    
                                </div>
                                
                                <br>
                               <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">A pagar: $MXN</label>
                                    <div class="col-sm-6 input-group">
                                      <span class="input-group-addon addon-primary">$</span>
                                        <input type="number" name="monto" disabled class="form-control"  value="1999" required>
                                      <span class="input-group-addon addon-orange">.00</span>
                                    </div>
                                </div>  
                                <br>              
                           <div class="text-center">
                            <button class="btn btn-success" type="submit" name="registro">Proyecto terminado</button>
                            <button class="btn btn-danger" type="submit" disabled="disabled">Cancelar</button>
                          </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection