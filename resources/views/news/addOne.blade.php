@extends('layouts.main')

@section('title')
@parent | Добавить новость
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
                        <h2><i>Добавление новости</i></h2><br>
                        <form>
                            <label for="category">Категория:</label><br>
                            <input type="text" id="category" name="category"><br>
                            <label for="title">Название:</label><br>
                            <input type="text" id="title" name="title"><br>
                            <label for="shortDescription">Краткое описание:</label><br>
                            <input type="text" id="shortDescription" name="shortDescription"><br>
                            <label for="textInfo">Текст новости:</label><br>
                            <input type="text" id="textInfo" name="textInfo"><br><br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection