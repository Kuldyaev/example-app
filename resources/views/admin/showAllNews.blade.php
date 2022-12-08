@extends('layouts.admin')

@section('title')
@parent | Админка
@endsection

@section('menu')
@include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                    <div class="card-header">
                        <div style="width:100%; display: flex; justify-content:space-between;">
                            <h2>Все новости</h2>
                            <div>
                                <a href="{{ route('admin.create') }}" class="btn btn-secondary">
                                    create news
                                </a>
                            </div>
                        </div>
                        <br>
                        @foreach ($news as $item)
                        <div class="singlenewsplace" style="width:100%; display: flex; justify-content:space-between; border: 1px solid grey; margin-bottom: 2px;" >
                            <div style="display: flex; flex-direction: column">
                                <a href="{{ route('news.showOne', $item->id) }}">{{ $item->title }}</a>
                                <p><i>{{ $item->shortDescription }}</i></p><br>
                            </div>
                            <div>
                                <form action="{{ route('admin.destroy', $item) }}" method="post" style="margin-top: 10px;"> 
                                    @csrf 
                                    @method('DELETE')
                                    <a href="{{ route('admin.edit', $item) }}" class="btn btn-success">
                                        edit
                                    </a>
                                    <input type="submit" class="btn btn-danger" value="delete" style="margin-left: 5px;"/>
                                </form>
                            </div>    
                        </div>
                        @endforeach 
                    </div>
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection