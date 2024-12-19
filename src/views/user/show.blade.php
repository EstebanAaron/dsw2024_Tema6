@extends('layouts.app')

@section('title', $title)

@section('content')
  <h2>Un usuario {{ $client['id'] }}</h2>
  <p>{{ $client['id'] }}</p>
  <p>{{ $client['name'] }}</p>
@endsection