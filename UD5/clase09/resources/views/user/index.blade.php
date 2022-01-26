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
        <form action="/users" method="get">
        <th><input class="form-control" type="text" name="name" placeholder="filtro nombre" value="{{$name}}"></th>
        <th><input class="form-control" type="text" name="role" placeholder="filtro role" value="{{$role}}"></th>
        <th><input class="btn btn-primary" type="submit" value="filtrar"></th>
        </form>
      </tr>
      @foreach($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->role->name }}</td>
          <td></td>
        </tr>
      @endforeach
      </table>

      {{$users->links('pagination::bootstrap-4')}}
      <p>
      El usuario logueado {{ $user->name }}
      </p>
    </div>
  </div>
</div>
@endsection
