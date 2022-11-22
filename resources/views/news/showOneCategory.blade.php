@extends('layouts.main')

@section('title')
@parent | Новости одной категории
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
                        <h2><i>Новости одной категории</i></h2>
                        <br>
                        @if ($news)
                            @foreach ($news as $item)
                                <a href="{{ route('news.showOne', $item->id) }}">{{ $item->title }}</a>
                                <p><i>{{ $item->shortDescription }}</i></p><br>
                            @endforeach
                        @else
                            <br>
                            <p> нет такой категории </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection