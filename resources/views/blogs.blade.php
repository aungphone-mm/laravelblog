@extends('layout')
@section('title')
<title>all blog</title>
@endsection
@section('content')

    @foreach($arr as $a)
    <div class="{{ $loop->odd ? 'bg-yellow': ''}}">
        <h1><a href="route1/<?= $a->slug; ?>"><?= $a->title; ?></a></h1>
        <div>
            <p><?= $a->date; ?></p>
            <p><?= $a->intro; ?></p>
        </div>
    </div>
    @endforeach
