@extends('layouts.app')

@section('title', $title)

@section('content')
  @if ($user)
  <h2>Un usuario {{ $user['id'] }}</h2>
  <p>{{ $user['id'] }}</p>
  <p>{{ $user['name'] }}</p>
  @else
  <h2>Usuario no encontrado</h2>
  @endif
@endsection