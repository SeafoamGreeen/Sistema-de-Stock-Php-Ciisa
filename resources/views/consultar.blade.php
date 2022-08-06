@extends('layouts.master')

@section('content')

    <div class="modal-dialog text-center">
        <div class="col-sm-12">
            <div class="modal-content">
                <form class="col-12" th:action="@{/login}" method="get">
                    <h4>Consultar producto</h4>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Código del producto (Obligatorio)"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre del producto (Obligatorio)"><br>
                    </div>
                    <div class="form-group">
                        <select class="form-select">
                        <option selected>Sucursal (Opcional)</option>
                        <option value="1">Rancagua</option>
                        <option value="2">Talca</option>
                        <option value="3">Concepción</option>
                        </select><br>
                    </div>
                    <button type="submit" href="http:/menu" class="btn btn-primary"> Consultar </button>
                </form>
                </div>
            </div>
        </div>
    </div><br>
@stop