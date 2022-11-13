@extends('layouts.main')

@section('title')
@parent | Главная
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <h2><i>Приветствуем Вас на домашней странице нашего агрегатора новостей</i></h2>
    <br>
    <h3>Данный проект разрабатывается в рамках курса Laravel от GeekBrains</h3>
@endsection