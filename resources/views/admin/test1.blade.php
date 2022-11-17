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
                        <h4>TEST1</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection