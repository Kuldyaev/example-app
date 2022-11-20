@extends('layouts.main')

@section('title')
@parent | Категории новостей
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
                        <h3>Категории новостей:</h3>
                        <br>
                        @foreach ($categories as $category)
                            <a href="{{ route('news.categories.showOneCategory', $category['id']) }}">{{ $category['name'] }}</a><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection