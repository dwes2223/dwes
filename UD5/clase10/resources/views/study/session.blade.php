@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Creación de estudios con sesión</h1>

        <form action="/study" method="post">
        @csrf
        <div>
            <label for="code">Código</label>
            <input type="text" name="code" value="{{$code}}"> 
        </div>

        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$name}}"> 
        </div>

        <div>
            <label for="abreviation">Abreviatura</label>
            <input type="text" name="abreviation" value="{{$abreviation}}"> 
        </div>

        <div>
            <input type="submit" value="Guardar en sesión"> 
        </div>        
        </form>        
        <hr>
        <div>
            <h2>Lista de módulos</h2>
            <ul>
                @foreach($lista as $item)
                <li>{{$item}}</li>
                @endforeach
            </ul>
            <form action="study/module" method="post">
                @csrf
                <input type="text" name="module">
                <br>
                <input type="submit" value="Guardar en la lista">
            </form>
        </div>
    </div>
    </div>


    <pre>
        {{ var_dump(\Session::all())}}
        {{-- 
        --}}
    </pre>
        
</div>
@endsection