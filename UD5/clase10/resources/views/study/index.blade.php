@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


        <h1>Lista de estudios
            <div class="float-right">                
                <a href="/studies/create" class="btn btn-primary">
                Nuevo                
                </a>
                <a href="/study" class="btn btn-primary">
                Nuevo (sesion)
                </a>    
            </div>
        </h1>
    
    
    <table class="table table-striped">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Abreviatura</th>
        </tr>
        @forelse ($studies as $study)
        <tr>
            <td>{{$study->code}} </td>
            <td>{{$study->name}} </td>
            <td>{{$study->abreviation}} </td>
            <td> <a class="btn btn-primary btn-sm" href="/studies/{{$study->id}}">Ver</a></td>
            <td> <a class="btn btn-primary btn-sm" href="/studies/{{$study->id}}/edit">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay estudios registrados</td>
        </tr>
        @endforelse
        </table>

        <hr>
        <h2>Busqueda ajax</h2>
        <form action="" id="formulario">
            <input type="text" id="filtro">
            <input type="submit">
        </form>
        <br>
        <div id="destinofiltro">
                destino filtro...
        </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="/js/ejemploajax.js"></script>
@endsection





