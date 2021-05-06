@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="p-3 mb-2 bg-success text-white ">
  <h1>Registo De Propietarios</h1>
</div>
@stop

@section('content')
<form action="/propietarios" method="POST" class="formguardar">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido"required>
  </div>
  <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Telefono</label>
      <input type="number" class="form-control" id="telefono" name="telefono"required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Placa vehiculo</label>
      <input type="text" class="form-control" id="placa_vehiculo" name="placa_vehiculo"required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Marca</label>
      <input type="text" class="form-control" id="marca" name="marca"required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tipo Vehiculo</label>
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="tipo_vehiculo"required>
        <option selected>Selecione tipo de vehiculo</option>
        <option value="Moto">Moto</option>
        <option value="Carro">Carro</option>
        <option value="Bicicleta">Bicicleta</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label"> # Documento</label>
      <input type="number" class="form-control" id="documento" name="documento"required>
    </div>
    <a  class="btn btn-outline-secondary"href="/propietarios">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
    <link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" rel="stylesheet" >
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
    <script >
  
      $('.formguardar').submit(function(e) {
        e.preventDefault();
       
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Guardado Correctamente',
          showConfirmButton: false,
          timer: 2000
        })
          this.submit();
      })
    </script>
@stop