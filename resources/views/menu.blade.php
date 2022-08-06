@extends('layouts.master')

@section('content')

<div class="modal-dialog text-center">
        <div class="col-sm-12">
            <div class="modal-content">
                <form class="col-12" th:action="@{/login}" method="get">
                    <h4>Seleccione una opción</h4><br>
                    <button type="submit" href="http:/menu" class="btn btn-success"> Registrar un producto </button> <br><br>
                    <button type="submit" href="http:/menu" class="btn btn-success"> Asignar producto </button> <br><br>
                    <button type="submit" href="http:/menu" class="btn btn-success"> Consultar producto </button> <br><br>
                    <button type="submit" href="http:/menu" class="btn btn-success"> Eliminar producto </button> <br><br>
                    <button type="submit" href="http:/menu" class="btn btn-success"> Actualizar producto </button> <br><br>
                    <button type="submit" href="http:/menu" class="btn btn-primary"> Cerrar sesión </button> <br><br>
                </form>
            </div>
        </div>
</div>
@stop

@section('footer')
    <a hrefs="/productos/create" type="button"  class="btn btn-success"> Registrar  producto </a> <br><br>
@stop   