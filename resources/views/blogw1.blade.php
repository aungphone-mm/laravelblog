@extends('layout')
  
@section('title')
<title>{{$bloga2->title;}}</title>
@endsection

  @section ('content')
    <h1>{{ $bloga2 ->title; }}</h1>
    <p>{!! $bloga2 ->body; !!}</p>
    <a href="/">go back</a>
    @endsection