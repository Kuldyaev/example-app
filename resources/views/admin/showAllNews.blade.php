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
                        <h2>Все новости</h2>
                        <br>
                        @foreach ($news as $item)
                        <a href="{{ route('news.showOne', $item->id) }}">{{ $item->title }}</a>
                        <p><i>{{ $item->shortDescription }}</i></p><br>
                        <form>
                            <input type="submit" name="delete"/>
                        </form>
                        @endforeach 
                    </div>
                    {{ $news->links() }}
                    <div>finish</div>
                </div>
            </div>
        </div>
    </div>
@endsection