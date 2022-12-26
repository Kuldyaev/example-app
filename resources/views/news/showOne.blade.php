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
                            <div style="min-height: 150px;  display:flex;">
                                <div style="max-width: 220px; min-width: 150px;  display:flex; justify-content:center; align-items: center;">
                                    <div class='newImg' style="width:145px; height: 145px; background-image:url( {{ $news->image }});
                                    background-size: 100% auto; background-repeat: no-repeat;"> 
                                    </div>
                                </div>
                                <h2 style="padding: 0 10px;":>{{ $news->title }}</h2>
                            </div>
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