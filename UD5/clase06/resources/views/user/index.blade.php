@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h1>Lista de usuarios (clase06)</h1>
      <table class="table table-striped">
      <tr>
        <th>Nombre</th>
        <th>Role</th>
      </tr>
      @foreach($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->role->name }}</td>
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
