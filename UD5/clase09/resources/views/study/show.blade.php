@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <h1>Estudion nº {{$study}}</h1>


        <ul>
            <li>
                <strong>Código</strong>
                {{ $study->code }}
            </li>
            <li>
                <strong>Nombre</strong>
                {{ $study->name }}
            </li>
            <li>
                <strong>Abreviatura</strong>
                {{ $study->abreviation }}
            </li>
        </ul>

        <div>
            <h2>Lista de modulos de este estudio</h2>
            <table class="table table-striped">
            <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Horas</th>
            </tr>
            @foreach($study->modules as $module)
                <tr>
                <td>{{ $module->code }}</td>
                <td>{{ $module->name }}</td>
                <td>{{ $module->hours }}</td>
                </tr>
            @endforeach
            </table>
        </div>
        <hr>

        <div>
            <h2>Añadir módulos</h2>

            <form action="/studies/{{$study->id}}/modules" method="post">
                @csrf
                <div>
                    <label for="code">Código</label>
                    <input type="text" name="code" value="{{ old('code') }}"> 
                    @error('code')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" value="{{ old('name') }}"> 
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="hours">Horas</label>
                    <input type="text" name="hours" value="{{ old('hours') }}"> 
                    @error('hours')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="submit" value="crear"> 
                </div>        
            </form>


        </div>        

        </div>
    </div>
</div>
@endsection
