@extends('layouts.layout_menu')

@section('contenido')
  <h1> Realizar propuesta </h1>

  <br>
  
  <h3>Nombre Proyecto aqui</h3>
  <br>
  <h3> Nombre (cliente) </h3>
  <br>

  <form action="">
    <label> Propuesta </label><br>
    <input type="textfield" placeholder="Escribe aquí tu propuesta" required>
    <br>
    <label for=""> Plazo </label><br>
    <input type="number" placeholder="dias" required>
    <br><br>
    <label for=""> Valor (número entero)</label><br>
    <input type="number" placeholder="valor a cobrar">
    
    <br><br>
    <input type="submit" value="Enviar Propuesta">
    
  </form>
@endsection