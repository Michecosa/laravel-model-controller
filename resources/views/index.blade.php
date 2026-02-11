@extends('layouts.master')

@section('title', 'I miei film su Laravel')

@section('main-content')
  <div class="container my-5">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
      @foreach ($movies as $movie)
      <div class="col">
        <x-cards>
          <x-slot:movieTitle>{{$movie['title']}}</x-slot:movieTitle>
          <x-slot:movieOriginalTitle>{{$movie['original_title']}}</x-slot:movieOriginalTitle>
          <x-slot:movieNationality>{{$movie['nationality']}}</x-slot:movieNationality>
          <x-slot:movieDate>{{$movie['date']}}</x-slot:movieDate>
          <x-slot:movieVote>{{$movie['vote']}}</x-slot:movieVote>
        </x-cards>
      </div>
      @endforeach
    </div>
  </div>
@endsection