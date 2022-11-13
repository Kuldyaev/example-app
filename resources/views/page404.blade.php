@include('menu')
<h3>page 404</h3>


@extends('layouts.main')

@section('title')
    @parent | 404
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
<br>
<h3>page 404</h3>
<br>
<h5>страница не существует</h5>
@endsection