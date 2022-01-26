@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h1>Lista de usuarios</h1>
      <table class="table table-striped">
      <tr>
        <th>Nombre</th>
        <th>Role</th>
        <th></th>
      </tr>
      <tr>
        <th><input class="form-control" type="text" placeholder="filtro nombre"></th>
        <th><input class="form-control" type="text" placeholder="filtro role"></th>
        <th><input class="btn btn-primary" type="submit" value="filtrar"></th>
      </tr>
      @foreach($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->role->name }}</td>
          <td></td>
        </tr>
      @endforeach
      </table>

      <p>
      El usuario logueado {{ $user->name }}
      </p>
    </div>
  </div>
</div>
@endsection
