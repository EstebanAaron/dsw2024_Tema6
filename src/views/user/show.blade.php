@extends('layouts.app')

@section('title', $title)

@section('content')
@if ($user)
  <h2>Un usuario</h2>
  <p>{{ $user->getId() }}</p>
  <h3>{{ $user->getName() }} - {{ $user->getSurname() }}</h3>
  <p>{{ $user->getEmail() }}</p>
  <p> 
    <div>
      <a href="/user/{{ $user->getId() }}/edit"><button>Editar</button></a>
      <form action="/user/{{ $user->getId() }}" method="post" class="inline">
        <input type="hidden" name="_method" value="delete">
        <input type="submit" value="eliminiar">
      </form>      
    </div>
  </p>
  <h3>Grupos</h3>
  @foreach($user->group() as $group )
    <li>{{ $group->getId() }} - {{ $group->getName() }}</li>
  @endforeach
@else
  <h2>Usuario no encontrado</h2>
@endif
@endsection