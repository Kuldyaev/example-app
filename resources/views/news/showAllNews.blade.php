@extends('layouts.main')

@section('title')
@parent | Все новости
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
                        <h2>Все новости</h2>
                        <br>
                        @foreach ($news as $item)
                        <a href="{{ route('news.showOne', $item->id) }}">{{ $item->title }}</a>
                        <p><i>{{ $item->shortDescription }}</i></p><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection