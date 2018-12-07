@extends('layouts.layout_menu')

@section('contenido')

<h1>Proyectos con mis habilidades</h1>
<div>
  <a href="/buscarProyectos"> <input type="submit" value="Todos los proyectos"> </a>
</div>

<div>
  <h4>Habilidades</h4>
  <div>
    
    <!-- Poner todas las habilidades del freelance aquí -->
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

  <a href="/realizarPropuesta"> <input type="submit" name="seleccionar" value="Enviar propuesta"> </a>
</div>

<br>


@endsection