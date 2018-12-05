
@extends('layouts.layout_menu')

@section('contenido')
  <h1>Crear proyecto</h1>
          <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <span>Favor de crear un proyecto</span>
                        </div> 
                           <br>
                        <div class="card-block">

                            <!--Crea el formulario del formulario de agregar categoria mediante el metodo post-->
                            <form method="post" enctype="multipart/form-data">  
                                
                               <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Categoria del proyecto</label>
                                    <div class="col-sm-6">
                                        <div class="select">
                                                        <select name="categoria" class="custom-select form-control" required="">
                                                            <option value="">Selecciona una categoria</option>
                                                            <option>option 1</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                            <option>option 6</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select an option
                                                        </div>
                                                    </div>
                                    </div>
                                </div>
                              <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Titulo del proyecto</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="titulo" class="form-control form-control-center form-control-round" placeholder="Escribe el titulo del proyecto" required>
                                    </div>
                                </div>
                                
                                <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Descripción del proyecto</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="descripcion" class="form-control form-control-center form-control-round" placeholder="Escribe la descripción del proyecto"  required>
                                    </div>
                                </div>
                                
                                <br>
                               <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Monto a pagar</label>
                                    <div class="col-sm-6 input-group">
                                      <span class="input-group-addon addon-primary">$</span>
                                        <input type="number" name="monto" class="form-control "  required>
                                      <span class="input-group-addon addon-orange">.00</span>
                                    </div>
                                </div>
                                
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <input type="submit" class="btn btn-gradient-01 col-sm-4" value="Publicar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection