@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
<p>Hay {{ count($users) }}</p>
@if( count($users) )
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellido</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $user['id']}}</td>
        <td>{{ $user['name']}}</td>
        <td>{{ $user['surname']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <h2>No hay usuarios</h2>
  @endif
@endsection