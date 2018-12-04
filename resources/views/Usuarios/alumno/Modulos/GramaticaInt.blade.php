@extends('Usuarios.alumno.layouts') @section('content')
<div class="page-wrapper">
  <!-- Page-header start -->
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-pen-alt-1  bg-c-blue card1-icon"></i>
          <div class="d-inline">
            <h4>Gramatica</h4>
            <span>{{$datos->ruta_img}}</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="page-header-breadcrumb">
          <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
              <a href="index.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Avances</a>
            </li>
            </li>
            <li class="breadcrumb-item"><a href="#!">Inicio</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

 <div class="row users-card">
  <div class="col-md-12">
    <div class="card user-card">
      <div class="card-header">
        <h5>Contenido</h5>
      </div>
      <div class="card-block">
        <div class="row">
          <div class="col-md-12">
              <center>
                <img class="img-fluid" src="{{Storage::url($datos->ruta_img)}}" width="700" height="700" >
              </center>
          </div>
        </div>
        <br>
        <div class="top-cap-text">
          <h3 align="center">
            {{$datos->pregunta}}
          </h3>
          <br>
          <h3 align="center">Respuestas</h3>
          <input type="radio" class="radio"> {{$datos->respuesta}}
          <input type="radio">
          <input type="radio">
          <input type="radio">
          <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection