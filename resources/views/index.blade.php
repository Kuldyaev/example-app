@extends('layouts.main')

@section('title')
@parent | Главная
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2><i>Приветствуем Вас на домашней странице нашего агрегатора новостей</i></h2>
                        <br>
                        <h3>Данный проект разрабатывается в рамках курса Laravel от GeekBrains</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection