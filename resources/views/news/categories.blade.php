@extends('layouts.main')

@section('title')
    @parent | Категории новостей
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <br>
    @foreach ($categories as $category)
        <a href="{{ route('news.categories.showOneCategory', $category['id']) }}">{{ $category['name'] }}</a><br>
    @endforeach
@endsection