@extends('layouts.main')

@section('title')
@parent | Все новости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <br>
    <h2>Все новости</h2>
    <br>
    @foreach ($news as $item)
    <a href="{{ route('news.showOne', $item['id']) }}">{{ $item['title'] }}</a>
    <p><i>{{ $item['shortDescription'] }}</i></p><br>
    @endforeach
@endsection