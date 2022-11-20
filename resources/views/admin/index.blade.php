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
                        <br>
                        <form>
                            <label for="login">Логин:</label><br>
                            <input type="text" id="login" name="login"><br>
                            <label for="pass">Пароль:</label><br>
                            <input type="text" id="pass" name="pass"><br>
                            <input type="radio" id="remember" name="remember" value="запомнить">
                            <label for="remember">запомнить</label><br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection