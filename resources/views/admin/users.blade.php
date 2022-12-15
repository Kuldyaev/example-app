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
                        <h4>Users</h4>

                        @foreach ($users as $item)
                        <div class="singlenewsplace" style="width:100%; display: flex; justify-content:space-between; border: 1px solid grey; margin-bottom: 2px;" >
                            <div style="display: flex; flex-direction: column">
                                <div>{{ $item->name }}</div>
                            </div>
                            <div>
                                <form  style="margin-top: 10px;"> 
                                    @csrf 
                                    @if( $item->isAdmin )
                                    <a href="{{ route('admin.editStatus', $item) }}" class="btn btn-success">
                                        admin 
                                    </a>
                                    @else
                                    <a href="{{ route('admin.editStatus', $item) }}" class="btn btn-danger">
                                       not admin
                                    </a>
                                    @endif
                                </form>
                            </div>    
                        </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection