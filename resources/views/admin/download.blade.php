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
                    <div class="card-header">страница загрузки информации</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{asset('22.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                <a href="{{ route('admin.test2') }}"  style="text-decoration: none">Скачать картинку &nbsp;</a>
                                </div>
                            </div>
                            <div class="card" style="width: 25rem; margin-left: 5px;" >
                                 <div class="card-header">Загрузка данных из базы новостей</div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <a href="{{ route('admin.download.json.news') }}" style="text-decoration: none">
                                                Скачать все новости в JSON
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="{{ route('admin.download.json.categories') }}" style="text-decoration: none">
                                                Скачать категории новостей в JSON
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                        <form action="{{ route('admin.download.json.category') }}" method="post">
                                                @csrf
                                                
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
                                                <br>
                                                <div class="form-group">
                                                    <input type="submit"  class="btn btn-outline-secondary" value="Скачать новости выбранной категории" >
                                                </div>
                                            </form>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="{{ route('admin.download.excel.news') }}" style="text-decoration: none">
                                                Скачать все новости в Excel
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection