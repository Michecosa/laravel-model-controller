@extends('layouts.master')

@section('title', 'I miei film su Laravel')

@section('main-content')
  <ul>
    @foreach ($movies as $movie)
        <li>{{$movie}}</li>
    @endforeach
  </ul>
@endsection