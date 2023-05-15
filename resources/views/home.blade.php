@extends('layouts/main')


@section('content')

<ul>
  @foreach($albums as $album)
  
    <li>
      {{$album->title}} - by {{$album->artist}}
    </li>
  
  @endforeach
</ul>

@endsection