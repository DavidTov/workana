@extends('layouts.layout_menu')

@section('contenido')

<h1>Buscar proyectos</h1>

<div>
  <h4>Filtrar</h4>
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

<br>

<div>
  <p>
    <h3> Nombre del proyecto </h3>
  </p>
  <br>
  <label for=""><h5>Plazo: </h5></label>
  <br>
  <label for=""><h5>Propuestas: </h5></label>
  <br>
  <label for=""><h5>Descripción: </h5></label>
  <br>
  <label for=""><h5>Categoria: </h5></label>
  <br>
  <label for=""><h5>Pago: </h5></label>
  <br>
  <label for="">Usuario</label>
  <br>

  <input type="submit" name="seleccionar" value="Enviar propuesta">
</div>



@endsection