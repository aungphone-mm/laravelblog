<x-layout>

  <x-slot name="title"><title>{{$bloga2->slug}}</title></x-slot>
    <h1>{{ $bloga2 ->title; }}</h1>
    <p>{!! $bloga2 ->body; !!}</p>
    <a href="/">go back</a>
    blogw1.blade.php
</x-layout>