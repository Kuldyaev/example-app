@extends('layouts.main')

@section('title')
@parent | Одна новость
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
                        @if ($news)
                            <h2>{{ $news->title }}</h2>
                            <h3><i>{{ $news->shortDescription }}</i></h3>
                            <br>
                            <p>{{ $news->textInfo }}</p>
                        @else
                            <br>
                            <p> нет такой новости </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection