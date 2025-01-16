@extends('layouts.app')

@section('title', $title)

@section('content')
@if ($group)
  <h2>Un grupo</h2>
  <p>{{ $group->getId() }}</p>
  <h3>{{ $group->getName() }}</h3>
  <p> 
    <div>
      <a href="/group/{{ $group->getId() }}/edit"><button>Editar</button></a>
      <form action="/group/{{ $group->getId() }}" method="post" class="inline">
        <input type="hidden" name="_method" value="delete">
        <input type="submit" value="eliminiar">
      </form>
      <a href="/group/{{ $group->getId() }}/insert"><button>Insertart Usuario</button></a>      
    </div>
  </p>
@else
  <h2>grupo no encontrado</h2>
@endif
@endsection