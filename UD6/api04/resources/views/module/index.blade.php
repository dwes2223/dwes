@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


        <h1>Lista de modulos
            <a href="/modules/create" class="btn btn-primary float-right">
                Nuevo
            </a>
        </h1>

        @if(session()->has('status'))
            <p class="alert alert-success">{{session('status')}}</p>
        @endif
        
        <table class="table table-striped">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Estudio</th>
            <th>Horas</th>
        </tr>
        @forelse ($modules as $module)
        <tr>
            <td>{{$module->code}} </td>
            <td>{{$module->name}} </td>
            <td>{{$module->study->name}} </td>
            <td>{{$module->hours}} </td>
            <td> <a class="btn btn-primary btn-sm" href="/modules/{{$module->id}}">Ver</a></td>
            <td> <a class="btn btn-primary btn-sm" href="/modules/{{$module->id}}/edit">Editar</a></td>
            <td> 
                <form action="/modules/{{$module->id}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input class="btn btn-primary btn-sm" type="submit" value="Borrar">
                </form>                
            </td>
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




