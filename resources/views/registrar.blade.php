@extends('layouts.master')

@section('content')

<div class="modal-dialog text-center w-50 p-5">
  <div class="col-sm-12">
    <div class="modal-content">
      <form class="col-12" th:action="@{/login}" method="get">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
          class="bi bi-bag-plus-fill mb-3" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />
        </svg>
        <h4><b>Registrar producto</b></h4>
        <br>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Código del producto"><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nombre del producto"><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Categoría"><br>
        </div>
        <div class="form-group">
          <select class="form-select">
            <option selected>Sucursal</option>
            <option value="1">Rancagua</option>
            <option value="2">Talca</option>
            <option value="3">Concepción</option>
          </select><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Descripción"><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Cantidad"><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Precio venta"><br>
        </div>
        <button type="submit" href="http:/menu" class="btn btn-success mx-3"> Registrar </button>
          <a type="submit" href="/menu" class="btn btn-secondary mx-3">Regresar</a>
      </form>
    </div>
  </div>
</div>
<br>
@stop
