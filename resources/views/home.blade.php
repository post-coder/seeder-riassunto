@extends('layouts/main')


@section('content')

<ul>
  @foreach($albums as $album)
  
    <li>
      {{$album->title}} - by {{$album->artist}}
      <br>
      {{$album->cover}} - {{$album->cover}}
    </li>
  
  @endforeach
</ul>

@endsection