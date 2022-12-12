@extends('layouts.admin')

@section('title')
@parent | Создание новости
@endsection

@section('menu')
@include('admin.menu')
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            @if ($category->id)
                                Изменение категории
                            @else
                                Добавление категории
                            @endif
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="@if (!$category->id){{ route('admin.categories.store') }}@else{{ route('admin.categories.update', $category) }}@endif " 
                              method="post">
                            @csrf
                            <input type="hidden" name="_method" value="@if ($category->id){{ 'PUT' }}@endif">
                            <div class="form-group">
                                <label for="name">Название категории:</label><br>
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach($errors->get('name') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input type="text" id="name" name="name" class="form-control" value="{{ $category->name ?? old('name') }}">
                            </div>    
                            <div class="form-group">
                                <label for="shortDescription">Слаг:</label><br>
                                @if ($errors->has('slug'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach($errors->get('slug') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input type="text" id="slug" name="slug" class="form-control" value="{{ $category->slug ?? old('slug') }}">
                            </div>
                            <div class="form-group">
                                <label for="shortDescription">ссылка на изображение:</label><br>
                                @if ($errors->has('img'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach($errors->get('img') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input type="text" id="img" name="img" class="form-control" value="{{ $category->img ?? old('img') }}">
                            </div>
                            <div class="form-group" style="margin-top: 10px;">
                                <input type="submit"  class="btn btn-outline-secondary" value="@if ($category->id) edit category @else add category @endif" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection