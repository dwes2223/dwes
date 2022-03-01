

{{ $role->name }}

<h2>Lista de usuarios</h2>

@foreach ($role->users as $user)
  <li>{{$user->name}}</li>
@endforeach