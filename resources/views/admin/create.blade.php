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
                            @if ($news->id)
                                Изменение новости
                            @else
                                Добавление новости
                            @endif
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="@if (!$news->id){{ route('admin.news.store') }}@else{{ route('admin.news.update', $news) }}@endif "  method="post">
                            @csrf
                            <input type="hidden" name="_method" value="@if ($news->id){{ 'PUT' }}@endif">
                            <div class="form-group">
                                <label for="title">Название:</label><br>
                                <input type="text" id="title" name="title" class="form-control" value="{{ $news->title ?? old('title') }}">
                            </div>    
                            <div class="form-group">
                                <label for="category">Категория:</label><br>
                                <select type="text" id="category" name="newsCategory" class="form-control">
                                  
                                    @forelse($categories as $item)
                                        <option @if ($item['id'] == old('newsCategory')) selected @endif  value="{{ $item['id'] }}" >{{ $item['name'] }}</option>
                                    @empty
                                        <option value='0' selected>Нет категорий</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="shortDescription">Краткое описание:</label><br>
                                <input type="text" id="shortDescription" name="shortDescription" class="form-control" value="{{ $news->shortDescription ?? old('shortDescription') }}">
                            </div>
                            <div class="form-group">
                                <label for="textInfo">Текст новости:</label><br>
                                <input type="text" id="textInfo" name="textInfo" class="form-control" value="{{ $news->textInfo ?? old('textInfo') }}">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="newsPrivate" name="isPrivate" class="form-check-input" value="1" 
                                @if ($news->isPrivate == 1 || old('isPrivate') == 1) checked @endif>
                                <label for="newPrivate">Приватная</label><br>
                            </div>
                            <div class="form-group">
                                <input type="submit"  class="btn btn-outline-secondary" value="@if ($news->id) edit news @else add news @endif" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection