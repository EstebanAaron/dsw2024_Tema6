@extends('layouts.app')

@section('title',  "Editar usuario en el grupo: " . $group->getId() . " " . $group->getName())

@section('content')
@if ($group)
  <p> 
    <div>
      <form action="/group/{{ $group->getId() }}/users" method="post" >
        
      
        <a href="/group/{{ $group->getId() }}/users"><button>Modificar Usuario</button></a>      
    </div>
  </p>
  <h3>Usuarios</h3>
  @foreach($users as $user )
  <li>
    @php
      $checked = (in_array($user->getId(),$usersBelongId)) ? 'checked' :'';
    @endphp
    <input type="checkbox" name="userId[]" id="{{$user->getId()}}" value="{{$user->getName()}}" {{$checked}}>
    <label for="{{$user->getId()}}">{{$user->getName()}}</label>
  </li>
  @endforeach
  <p>
  <input type="submit" value="Actualizar">
  </p>
      </form>
    </div>
@else
  <h2>grupo no encontrado</h2>
@endif
@endsection