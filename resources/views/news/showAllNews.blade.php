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
                        <div class="singlenewsplace" style="width:100%; height: 100%; display: flex; justify-content:space-between; border: 1px solid grey; margin-bottom: 2px;" >
                            <div style="max-width: 220px; min-width: 80px;  display:flex; justify-content:center; align-items: center;">
                                <div class='newImg' style="width:80px; height: 80px; background-image:url( {{ $item->image }});
                                background-size: 100% auto; background-repeat: no-repeat;"> 
                                </div>
                            </div>
                            <div style="display: flex; flex-direction: column; padding: 0 5px;">
                                <a href="{{ route('admin.news.show', $item->id) }}">{{ $item->title }}</a>
                                <p><i>{{ $item->shortDescription }}</i></p><br>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection