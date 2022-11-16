@extends('layouts.main')

@section('title')
@parent | 404
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
                    <br>
                        <h3>page 404</h3>
                        <br>
                        <h5>страница не существует</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection