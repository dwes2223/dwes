@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


        <h1>Lista de estudios
            <a href="/studies/create" class="btn btn-primary float-right">
                Nuevo
            </a>
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





        </div>
    </div>
</div>
@endsection




