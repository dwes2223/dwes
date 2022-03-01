@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Creación de modulos</h1>

        <form action="/modules" method="post">
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
            <label for="hours">Estudios</label>
            <select name="study_id" id="study_id">
                @foreach($studies as $study)
                <option value="{{$study->id}}"  {{ (old('study_id') == $study->id) ? 'selected' : '' }} >{{$study->name}}</option>
                @endforeach
            </select>
            @error('hours')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <input type="submit" value="crear"> 
        </div>        
        </form>
        
        @if(count($errors->all()))
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach            
        </div>
        @endif
    </div>
    </div>

</div>
@endsection